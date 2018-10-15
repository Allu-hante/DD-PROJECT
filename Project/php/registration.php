<?php

#Check if the form was submitted
if(isset($_REQUEST['submit']))
{
	#Perform Registration Action	
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$user_name=$_REQUEST['user_name'];
	$password=$_REQUEST['password'];
	$password_confirmation=$_REQUEST['password_confirmation'];
	$email=$_REQUEST['email'];
	
	include('db_login.php');
	
	$query=mysql_query("INSERT INTO accounts_users (first_name, last_name, user_name, email, password, password_confirmation) VALUES ('".$first_name."', '".$last_name."', '".$user_name."','".$password."', '".$password_confirmation."','".$email."');") or die("Error in registration!!");
	
	#Go to the login page
	echo('<script>window.location="login.php"</script>');
}

#Continue to show the form if it was not submitted

?>