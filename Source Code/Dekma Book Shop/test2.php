<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#page {
	background-color: #0F0;
	background-position: left top;
	position: absolute;
	width: 1079px;
	height: 1669px;
	left: 103px;
	top: 3px;
}
#log {
	background-color: #333;
	height: 199px;
	width: 273px;
	position: absolute;
	border:1px solid;
	border-radius:25px;
	left: 803px;
	top: 1px;
	text-align: left;
}
#menubar {
	background-color: #999;
	position: absolute;
	height: 82px;
	width: 1072px;
	left: 1px;
	top: 207px;
}
#logo {
	background-color: #000;
	height: 200px;
	width: 800px;
	position: absolute;
}
#foot {
	background-color: #F0F;
	position: absolute;
	width: 1079px;
	height: 103px;
	left: 1px;
	top: 1562px;
}
#content {
	background-color: #F00;
	position: absolute;
	left: 6px;
	top: 303px;
	width: 869px;
	height: 1003px;
}
</style>
</head>
<script type="text/javascript" src="jquery.js"></script>
 <?php session_start();
  
  if(!empty($_SESSION['user'])){
	  $iframe_src = 'login.php';
	  	  
  		}
	else{
		$iframe_src = 'logbox.php';} ?>
        
<body>
<div class="page" id="page" align="center">
  <div class="logo" id="logo" align="center">ontent for  class "logo" id "logo" Goes Here
    <div class="content" id="content"><iframe id="cont" style=".hover{	 text-align:center;
	  border-radius:12px;
      opacity:0.7;
      width:306px;
      height:144px;
     
	   background:-moz-linear-gradient(top,#06c,#fff);}" frameborder="0" height="1003px" width="869px" ></iframe></div>
  </div>
  <div class="log" id="log" >
<iframe id="logi" frameborder="0" name="logi" src="login.php" allowtransparency="true"  height="199px" width="273px">

  </iframe>  </div>
  <div class="menubar" id="menubar">
    <table width="1077" height="85" border="1">
      <tr>
        <th width="155" scope="col"><a href="Base.php">Home</a></th>
        <th width="120" scope="col"><a href="cart.php?action=none&id=001" target="cont">Cart</a></th>
        <th width="165" scope="col"><a href="cart.php?action=add&id=002" target="cont">Books</a></th>
        <th width="176" scope="col"><a href="search.php" target="cont">Search</a></th>
        <th width="204" scope="col">About</th>
        <th width="217" scope="col">Contact us</th>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="footer" id="footer"></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="foot" id="foot">Content for  class "foot" id "foot" Goes Here</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>