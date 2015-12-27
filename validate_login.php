<?php
$conn = mysql_connect ("localhost","root","");
mysql_select_db ("db2");
$result=mysql_query("select * from login WHERE username='".$_POST['username']."' and pwd='".$_POST['password']."'");
$num_rows=mysql_num_rows($result);
if($num_rows==1)
	{
	session_start();
	$_SESSION['name']=$_POST['username'];
	header('location:home.php');
	
	}
	else
	{
	header('location:login.html?msg=wrong user name');
	
	}
	
            ?>