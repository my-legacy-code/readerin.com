<?php
session_start();
$_SESSION['mad_user_id']=$_REQUEST['user_id'];
$_SESSION['mad_appid']=$_REQUEST['appid'];
$_SESSION['mad_token']=$_REQUEST['token'];
$_SESSION['login']=true;
include("../core/conn.php");
$sql="SELECT * FROM admin WHERE id='".$_REQUEST['user_id']."'";
$result=mysql_query($sql,$conn);
if(mysql_num_rows($result)>0)
{
	$_SESSION['admin']=true;
}
else
{
	$_SESSION['admin']=false;
}
header("Location:../admin/index.php");
?>