<style type="text/css">
</style>
<h1 align="center">Orders Pending</h1>

<?php
session_start();
mysql_connect('localhost','root','kaputa');
mysql_select_db('dekma');
if(isset($_GET['action'])){
$action=$_GET['action'];
$cartid=$_GET['cartid'];
if($action=='issue'){
	
	mysql_query("UPDATE cart SET issued='yes' WHERE cartid=$cartid");
	
	
	
	}
}

$top=78;
$result = mysql_query("SELECT * from cart NATURAL JOIN customer WHERE issued='no'");
while($row = mysql_fetch_array($result)){
	$email=$row['email'];
	$tops=$top."px";
	$cartid=$row['cartid'];
	$result2 = mysql_query("SELECT * from cartbook WHERE cartid=$cartid");
	echo "<div style='border: 3px solid #DADADA; border-radius:10px; border-image: -webkit-linear-gradient(270deg,#9B9B9B,#F6F6F6) 7 stretch; box-shadow: 0px 6px 10px #888888; position: absolute; width: 377px; height: 135px; left: 28px; top: $tops;' id='ord'>";
  echo "<table width='300' height='100'>";
 echo "   <tr>";
  echo "    <td height='32'><h2 >Cart Id :$cartid</h2></td><td height='32'><h4 style='vertical-align:top' align='right'>$email</h4></td>";
  echo "  </tr>";
	while($row2 = mysql_fetch_array($result2)){
	$isbn=$row2['isbn'];
	$qty=$row2['qty'];
	
	
  echo "  <tr>";
  echo "    <td>ISBN :$isbn  =>Quantity :  $qty</td><td>&nbsp;</td>";
  echo "  </tr>";

	}
	 echo "  <tr>";
  echo "    <td>&nbsp;</td><td><a href='orders.php?action=issue&cartid=$cartid'>Issue</a></td>";
  echo "  </tr>";
	  echo " </table>";
	  
  echo " </div>";
  $top+=140;
	}
?>