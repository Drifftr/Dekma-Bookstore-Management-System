<html>
<head>
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
<title>Registration Form</title>
<style type="text/css">

#regfrm {
	position: absolute;
	left: 140px;
	top: 32px;
	width: 480px;
	height: 152px;
}

#passok {
	background-color:transparent;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	opacity:0.4;
	-moz-transition: height 0.5s,width 0.1s, -moz-transform 0.5s;
	-webkit-transition: height 0.5s,width 0.1s, -webkit-transform 0.5s;
	-o-transition: height 0.5s,width 0.1s, -o-transform 0.5s;
	position: absolute;
	width: 152px;
	height: 20px;
	left: 311px;
	top: 156px;
}
#mailok {
	background-color:transparent;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	opacity:0.4;
	-moz-transition: height 0.5s,width 0.1s, -moz-transform 0.5s;
	-webkit-transition: height 0.5s,width 0.1s, -webkit-transform 0.5s;
	-o-transition: height 0.5s,width 0.1s, -o-transform 0.5s;
	position: absolute;
	width: 162px;
	top: 282px;
	height: 27px;
	left: 316px;
}
.msg {
	background-color:transparent;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	opacity:0.4;
	position: absolute;
	left: 302px;
	top: 478px;
	width: 210px;
	height: 25px;
}
</style>

</head>
<body>
<div align="center" class="regfrm" id="regfrm">
<form method="POST" action="register.php">

<h3 align=center>User Registration Form</h3>
<table width="454" height="281" border="0" align=center>
<tr>

<td width="129">Username</td>
<td width="315"><input type="text" name="username" id="username"/></td>
</tr>
<tr>

<td>Name</td>
<td ><input type="text" name="fname" id="fname"/></td>
</tr>
<tr>
<td>Password</td>
<td><input id="password" type="password" name="password"/></td>
</tr>
<tr>
<td height="30">Confirm Password</td>
<td><input type="password" id="con_password" name="con_password" onKeyUp="checkPass(this.form);"><div class="passok" id="passok"></div></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address" id="address" cols="25" rows="5"></textarea></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" id="email" name="email" onKeyUp="checkMail(this.form);" >
  <div class="mailok" id="mailok"></div></td>
</tr>
<tr>
<td>Phone no.</td>
<td>
<input type="text" id="phone" name="phone" >
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
<td width="315"><input type="text" name="zip" id="zip"/></td>
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

</form>
</div>
<div class="msg" id="msg"></div>
</body>
</html>