<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">
function checkPass(){
var pass=document.getElementById("password").value;
var repass=document.getElementById("con_password").value;

//alert("passwords do not match");
if(pass==repass && repass!=""){
		document.getElementById("passok").innerHTML = "Password matches";
		
	}else{
		document.getElementById("passok").innerHTML = "Passwords Do Not Match";
		
		
		}

}

function checkMail(){
	var mail=document.getElementById("email").value;
	if(validateEmail(mail)==false){
		document.getElementById("mailok").innerHTML = "Enter a Valid Mail";
			}else{
				document.getElementById("mailok").innerHTML = "Valid Mail";
				
				}
	
	}
 
function validateForm(frm){
var user=frm.username.value;
var pword=frm.password.value;
var cpword=frm.con_password.value;
var address=frm.address.value;
var email=frm.email.value;
var country=frm.country.value;
var name=frm.name.value;

if(user=="" || pword=="" || cpword=="" || address=="" || email=="" ){
document.getElementById("msg").innerHTML = "Please Enter Values";
return false;
}
else if(confirmPassword(pword,cpword)==false){
document.getElementById("msg").innerHTML ="passwords do not match";return false;
}
else if(validateEmail(email)==false){
document.getElementById("msg").innerHTML ="Invalid Email address";return false;
}
else
return true;
}

function confirmPassword(p1,p2){
if(p1==p2)return true;
else return false;
}

function validateEmail(frm){
var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address =frm
if(reg.test(address)==false){
return false;
}
else{return true;}
}
</script>
<?php 
session_start();
mysql_connect('localhost','root','kaputa');
mysql_select_db('dekma');

	$userid=$_GET['uid'];
	$result = mysql_query("SELECT * from customer WHERE cusid=$userid");
	$row = mysql_fetch_array($result);
	$username=$row['username'];
	$password=$row['password'];
	$fname=$row['name'];
	$address=$row['address'];
	$email=$row['email'];
	$phone=$row['phoneno'];
	$zip=$row['zipcode'];
	$country=$row['country'];
	
	if(isset($_POST['submit'])){
		
		
		$username1=$_POST['username'];
		$password1=$_POST['password'];
		$email1=$_POST['email'];
		$address1=$_POST['address'];
		$phone1=$_POST['phone'];
		$country1=$_POST['country'];
		$fname1=$_POST['fname'];
		$zip1=$_POST['zip'];
		
		$result = mysql_query("UPDATE customer SET username='$username1',password='$password1',email='$email1',address='$address1',phoneno='$phone1',country='$country1',name='$fname1',zipcode='$zip1' WHERE cusid=$userid");
		
	echo "<h3 align='center'>User Details Edited Successfully</h3>";
	}
	
?>
<body>
<form method="POST" action="edituser.php">
<h3 align=center>Edit User Form</h3>
<table width="454" height="281" border="0" align=center>
<tr>

<td width="129">Username</td>
<td width="315"><input type="text" name="username" id="username" value="<?php $username;?>"/></td>
</tr>
<tr>

<td>Name</td>
<td ><input type="text" name="fname" id="fname" value="<?php $fname;?>"/></td>
</tr>
<tr>
<td>Password</td>
<td><input id="password" type="password" name="password" value="<?php $password;?>"/></td>
</tr>
<tr>
<td height="30">Confirm Password</td>
<td><input type="password" id="con_password" name="con_password" onKeyUp="checkPass(this.form);"><div class="passok" id="passok"></div></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address" id="address" cols="25" rows="5" value="<?php $address;?>"></textarea></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" id="email" name="email" value="<?php $email;?>" onKeyUp="checkMail(this.form);" >
  <div class="mailok" id="mailok"></div></td>
</tr>
<tr>
<td>Phone no.</td>
<td>
<input type="text" id="phone" name="phone" value="<?php $phone;?>">
</tr>
<tr>
<td>Country
</td>
<td>
<select name="country" id="country">
<option value="">---Select---</option>
<option value="">Srilanka</option>
<option value="">America</option>
<option value="">Uganda</option>
<option value="">Germany</option>
</select>
</td>
</tr>
<tr>

<td width="129">Zip Code</td>
<td width="315"><input type="text" name="zip" id="zip" value="<?php $zip;?>"/></td>
</tr>
<tr>
<tr>
</tr>
<td>
</td>
<td>
<input type="submit" value="submit" name="submit" id="submit" onClick="return validateForm(this.form)">
<input type="reset" value="Reset">
</td>
</tr>
</table>
<?php


?>
</form>
</body>
</html>