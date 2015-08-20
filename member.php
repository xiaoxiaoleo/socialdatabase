<?php
session_start();

//$_SESSION['member']='guest';

error_reporting(0);
if (!isset ($_SESSION)) {
	ob_start();
	
}
  //注册用户使用数据库配置文件
 $hostname="localhost"; //mysql地址
 $basename="root"; //mysql用户名
 $basepass=" "; //mysql密码
 $database="test"; //mysql数据库名称

 $conn=mysqli_connect($hostname,$basename,$basepass) or die("Error " . mysqli_error($conn)); //连接mysql              
 mysqli_select_db($conn,$database); //选择mysql数据库
 $conn->query("set names 'utf8'");//mysql编码
?>