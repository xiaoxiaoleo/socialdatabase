<?php
require_once ('member.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./static/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="./static/css/bootstrap.min.css">

﻿
 
<?php
if(isset($_POST["submit"])){
if(empty($_POST['member_user']))
	echo "<script>alert('帐号不能为空');location='?tj=register';</script>";
else if(empty($_POST['member_password']))
	echo "<script>alert('密码不能为空');location='?tj=register';</script>";
else if($_POST['member_password']!=$_POST['pass'])
	echo "<script>alert('两次密码不一样');location='?tj=register';</script>";
else if(!empty($_POST['member_qq'])&&!is_numeric($_POST['member_qq']))
	echo "<script>alert('qq号必须全为数字');location='?tj=register';</script>";
else if(!empty($_POST['member_phone'])&&!is_numeric($_POST['member_phone']))
	echo "<script>alert('手机号码必须全为数字');location='?tj=register';</script>";
else if(!empty($_POST['member_email'])&&!ereg("([0-9a-zA-Z]+)([@])([0-9a-zA-Z]+)(.)([0-9a-zA-Z]+)",$_POST['member_email']))
	echo "<script>alert('邮箱输入不合法');location='?tj=register';</script>";
else{
$_SESSION['member']=$_POST['member_user'];
$sql="insert into member values(null,'".$_POST['member_user']."','".md5($_POST['member_password'])."','".$_POST['member_name']."','".$_POST['member_sex']."','".$_POST['member_qq']."','".$_POST['member_phone']."','".$_POST['member_email']."')";
$result=$conn->query($sql)or die(mysqli_error());
if($result)
echo "<script>alert('注册成功,请刷新');location='index.php';</script>";
else
{
	echo "<script>alert('注册失败');location='pass.php?tj=register';</script>";
	mysqli_close();
}
	}
}
?>
</head>
<body>
<?php if(isset($_GET['tj'])&&($_GET['tj'] == 'register')){ ?>
<form id="theForm" name="theForm" method="post" action="" onSubmit="return chk(this)" runat="server" style="margin-bottom:0px;">
      <td width="228" height="36" bgcolor="#FFFFFF"><input  placeholder="UserName"  name="member_user" type="text" class="form-control" id="member_user" size="20" maxlength="20" /></td>
    </tr>
    <tr><br>
      <td height="36"><input placeholder="PassWord" name="member_password" type="password" class="form-control" id="member_password" size="20" maxlength="20" /></td>
    </tr>
    <tr><br>
      <td height="36"><input placeholder="PassWordConfim" name="pass" type="password" class="form-control" id="pass" size="20" /></td>
    </tr>
    <tr><br>
      <td height="36"><input placeholder="RealName" name="member_name" type="text" class="form-control" id="member_name" size="20" />
      <label></label></td>
    </tr>
    <tr><br>
      <td height="36"><input  placeholder="Email"  name="member_email" type="text" class="form-control" id="member_email" size="20"/></td>
    </tr>
    <tr>
      <td height="51" colspan="2" align="center" bgcolor="#FFFFFF"><div align="right"></p>
        <input name="submit" type="submit" class="btn btn-success" id="submit" value="Register" />
      </div></td>
    </tr>
  </table>
</form>
<?php
} 
	else{
?>
<?php
if(isset($_POST["submit2"])){
$name=$_POST['name'];
$pw=md5($_POST['password']);
$sql="select * from member where member_user='".$name."'"; 
$result=mysqli_query($conn,$sql) or die("账号不正确");
$num=mysqli_num_rows($result);
if($num==0){
	echo "<script>alert('帐号不存在');location='pass.php';</script>";
	}
while($rs=mysqli_fetch_object($result))
{
	if($rs->member_password!=$pw)
	{
		echo "<script>alert('密码不正确');location='pass.php';</script>";
		mysql_close();
	}
	else 
	{
		$_SESSION['member']=$_POST['name'];
		header('Location:index.php');
		mysql_close();
		}
	}
}
?>
<form action="" method="post" name="regform" onSubmit="return Checklogin();" style="margin-bottom:0px;">
<table width="229" height="132" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#00FF00" bgcolor="#000000">
    <tr>

      <td width="4" rowspan="2" align="center" class="h5">&nbsp;</td>
      <td width="299" height="60" class="font"><div align="left">
        <input placeholder="UserName" name="name" type="text" class="form-control" id="name">
      </div></td>
    </tr>
    <tr>
      <br>
      <td height="36" class="font"><input placeholder="PassWord" name="password" type="password" class="form-control" id="name">        </td>
    </tr>
    <tr>
    <td colspan="2" align="center" valign="top" class="font"><div align="right"></p>
      <input name="submit2" type="submit" class="btn btn-success" value="LogIn"/>
    </div></td>
  </tr>
</table>
</form>
<?php } ?>
    
</body>
</html>