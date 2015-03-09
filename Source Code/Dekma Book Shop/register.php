<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
session_start();
mysql_connect('localhost','root','kaputa');
mysql_select_db('dekma');

	if(isset($_POST['submit'])){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$country=$_POST['country'];
		$fname=$_POST['fname'];
		$zip=$_POST['zip'];
		
		
		if(mysql_query( "INSERT INTO customer(username,password,email,phoneno,address,country,name,zipcode) VALUES('$username','$password','$email','$phone','$address','$country','$fname','$zip')")){
		$query ="select * From customer where username='$username' and password='$password'";
	    $result = mysql_query($query);
	    $row = mysql_fetch_array($result);
	    if(mysql_num_rows($result)>0){
		  $_SESSION['user'] = $username;
		  $_SESSION['userid'] = $row['cusid'];
		
		}
	
	
	
		
		echo "<h1><p align='center'>Registration Successfull</p></h1><br>";
		}
		
		}


?>
<body>
</body>
</html>