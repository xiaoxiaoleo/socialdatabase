
<!DOCTYPE html>
<HTML> 
<HEAD> 
<title>SocialDatabase</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./static/css/bootstrap.css" rel="stylesheet">
	 <link href="./static/css/style.css" rel="stylesheet">
    <link href="./static/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css"></style>
<meta name="description" content="SocialDatabase">
<meta name="keywords" content="SocialDatabase">
<script type="text/javascript">
if (window!=top)
top.location.href =window.location.href;
</script>
<?php 
require_once ('member.php'); 
//显示用户
if(isset($_SESSION['member'])){
    $sql="select * from member where member_user='".$_SESSION['member']."'";
    $result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));; 
    $rs=mysqli_fetch_array($result);
}
?>
<?php
//注销操作
if(isset($_GET["tj"])){
	if($_GET["tj"]=="destroy"){
		session_destroy();
		echo "<script>alert('退出成功');location='index.php';</script>";
		}

}
?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-sm" href="index.php">SocialDatabase</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                          <?php 
	  if(empty($_SESSION['member'])){
	  ?> 
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">LogIn<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="">
                  <iframe class="wmff_zjkkzz" src="pass.php?tj=''" align="center" width="300" height="200"    frameborder="0" scrolling="no"></iframe>
                </li>
               </ul>
            </li>
            
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <iframe class="wmff_zjkkzz" src="pass.php?tj=register" align="center" width="300" height="320"    frameborder="0" scrolling="no"></iframe>
                </li>
              </ul>
            </li>

   
          </ul>
        </div>
      </div>
    </div>


<script type="text/javascript">function cnrv_msg(str){alert(str);}</script></head>
<body>

    <div class="jumbotron">
      <div  style="margin:0 auto;width: 1000px;"><br>
			<div class="h6">
<?php  }else{  ?>
            <ul class="nav navbar-nav navbar-right">
            <li><a href='#'><?php echo htmlspecialchars($_SESSION['member']); ?></a></li>
            <li><a href='index.php?tj=destroy'>logout</a></li>
            </ul>
        </div>
      </div>
    </div>
  <?php }?>


</head>

</div>

  <script src="./static/js/jquery.js"></script>
  <script src="./static/js/system.js"></script>
  <script src="./static/js/administry.js"></script> 
  <script src="./static/js/bootstrap.min.js"></script> 
  <script src="./ajax.php?act=database"></script>
<link rel="stylesheet" href="./static/css/bootstrap.min.css">
<link rel="stylesheet" href="./static/css/bootstrap-theme.min.css">
    <div class="jumbotron"><h1>Social Database<h1>
      <div  style="margin:0 auto;width: 1000px;"><br>
			<div class="h6">
			  <div class="jumbotron search-box">
                <span class="input-group">
                  <select class="btn btn-default" id="match_act" name="match_act">
                    <option value="1" selected="">RightMatch</option>
                    <option value="2">Exactly</option>
                  </select>
                  <select class="btn btn-default" id="select_act" name="select_act">
                    <option class="btn-group" value="3" selected="">User & Email</option>
                    <option  class="btn-group" value="1">UserName</option>
                    <option class="btn-group" value="2">Email</option>
                  </select>
                </span></p>
              <div id="jshint-pitch" class="alert alert-info scan-wait" style="display:none;margin-top:10px;font-size:14px"> 
              </div>
              <div id="scan-result-box"  class="bs-example bs-example-form" role="form">
                <div class="input-group"><span class="input-group-btn scan-but-span">
                  <button type="button" class="btn btn-success" " onClick="getdata();"><span class="glyphicon glyphicon-search"></span> SEARCH</button>
                  </span>
                  <input placeholder="Enter UserName,Email,Phone,Password"  name="key" class="form-control" id="key" >
                </div>
              </div>
              <div class="alert alert-warning error-box" style="display:none;margin-top:10px;font-size:14px"></div>
              <div style="display:none;" id="selecting" class="progress  bar-success active progress-info"><span><b></b></span></div>
                <table  style="font-size:12px;display:none;" id="somd5_table" >
                <thead>
                    <tr>
                        <th width="30%">用户名</th>
                        <th width="30%">邮箱</th>
                        <th width="30%">密码</th>
                        <th width="30%">来源</th>
                    </tr>
                </thead>
                <tbody id="value_tables">
                </tbody>
                </table>
              </div>
            </div>

</BODY> 
</HTML>

