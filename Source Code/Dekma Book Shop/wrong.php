<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#tes {
	position: absolute;
	width: 539px;
	height: 201px;
	left: 129px;
	top: 21px;
}
</style>
</head>

<body>
<div class="tes" id="tes">
  <h2 align="center">Please Enter Details Below</h2>
<form action="wrong.php" method="post">
  <table width="540" height="198">
    <tr>
      <td width="234">Username:</td>
      <td width="291"><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>  <input type="submit" name="subm" id="subm" value="Submit" /></td>
    </tr>
  </table>
  </form>
</div>
<?php
session_start();
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
if(isset($_POST['subm'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	
	$query ="select * From customer where username='$username' and email='$email'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if(mysql_num_rows($result)>0){
		
		$password = $row['password'];
		
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>We've Sent an Email About the password Details in to your account!</center>";
		echo "<br><a href='home.php'><center>Back To Home</center></a>";
		mail("$email", "Password Details","Your password is :$password", "From:admin@dekmabookshop");
	}else{
			echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>Wrong Username Or Email!</center>';
			}
	
	
	
	
	
	
	}
?>
</body>
</html>