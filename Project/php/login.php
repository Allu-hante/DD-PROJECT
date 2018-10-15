<?php
session_start();

if(isset($_SESSION['sig']))
{
	#User is already logged in
	echo("<script>window.location='home.php'</script>");	
}

#Check if the login form was submitted
if(isset($_REQUEST['submit']))
{
	#Perform login action
	$username=$_REQUEST['user_name'];
	$password=$_REQUEST['password'];
	
	include('db_login.php');
	$query=mysql_query("SELECT * FROM Users WHERE username='".$user_name."' AND password='".$password."'");	
	$row=mysql_fetch_array($query);
	if(empty($row))
	{
		#False Info / User doesn't exist
		echo('<script>alert("False login credentials!");</script>');
	}
	else
	{
		#User exists and login is successful	
		$_SESSION['sig']="OK";
		echo('<script>window.location="home.php"</script>');
	}
}


?>