<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#data {
	position: absolute;
	width: 389px;
	height: 167px;
	left: 157px;
	top: 106px;
}
</style>
</head>

<body>
<h1 align="center">User Panel</h1>
<div class="data" id="data">
  <table width="397" height="88">
    <tr>
      <td align="center"><u>User</u></td>
      <td align="center"><u>Email</u></td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
    </tr>
     <?php
 session_start();
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
 if(isset($_GET['action'])){
 $action=$_GET['action'];
 if($action='remove'){
	 $uid=$_GET['uid'];
	 mysql_query( "DELETE FROM customer WHERE cusid=$uid");
	  }
 }
 $result = mysql_query("SELECT * from customer");
 while($row = mysql_fetch_array($result))
  {
	$user=  $row['username'];
	$email=  $row['email'];
	$cusid=  $row['cusid'];
	echo "<tr>";
    echo "  <td>$user</td>";
    echo "  <td>$email</td>";
    echo "  <td><a href='edituser.php?uid=$cusid'>Edit</a></td>";
    echo "  <td><a href='users.php?action=remove&uid=$cusid'>Remove</a></td>";
    echo " </tr>";
	 }
 ?>
    
    
  </table>
</div>
</body>
</html>