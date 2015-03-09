<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
</head>

<body>


</body>
<?php
session_start();
echo "<h1 align='center'> Shopping cart </h1><br />";
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
if (isset($_GET['id']))
$id=$_GET['id'];
else
$id=1;

if (isset($_GET['action']))
$action=$_GET['action'];
else
$action="empty";

switch($action)
{
case "add":
if (isset($_SESSION['cart'][$id]))
$_SESSION['cart'][$id]++;
else
$_SESSION['cart'][$id]=1;
	/////////////////////////////
  $itemresult = mysql_query("SELECT qty from book WHERE isbn=$id");
	$itemrow = mysql_fetch_array($itemresult);
	$lastitemqty=$itemrow['qty'];
	$itemqty=$lastitemqty-1;
		
  mysql_query("UPDATE book SET qty=$itemqty WHERE isbn=$id");	
	///////////////////////////////////////////////

break;
case "remove":
if (isset($_SESSION['cart'][$id]))
{
$_SESSION['cart'][$id]--;
if ($_SESSION['cart'][$id]==0)
unset($_SESSION['cart'][$id]);
}
	/////////////////////////////
  $itemresult = mysql_query("SELECT qty from book WHERE isbn=$id");
	$itemrow = mysql_fetch_array($itemresult);
	$lastitemqty=$itemrow['qty'];
	$itemqty=$lastitemqty+1;
		
  mysql_query("UPDATE book SET qty=$itemqty WHERE isbn=$id");	
	///////////////////////////////////////////////



break;
case "empty":
unset($_SESSION['cart']);
break;
}
/*Display cart*/
if (isset($_SESSION['cart']))
{

echo "<table align='center' border=0 cellspacing=0 cellpadding=0 width='500'>";
$total=0;
$message="none";
if(!empty($_SESSION['user'])){
	$userid=$_SESSION['userid'];
	$result = mysql_query("SELECT email from customer WHERE cusid=$userid");
	$row2 = mysql_fetch_array($result);
	$email=$row2['email'];
	}
foreach($_SESSION['cart'] as $id => $x)
{

$result = mysql_query("SELECT title,price from book WHERE isbn=$id");
$myrow = mysql_fetch_array($result);
$name=$myrow['title'];
$price=$myrow['price'];
$line_cost=$price * $x;
$total=$total+$line_cost;


$message =$message."Product id:$id  Qty :$x  Price :$line_cost ****\n" ;
echo "<tr>";
echo "<td align='left'> $name </td>";
if (!isset($_POST['purchase']))
  {
echo "<td align='right'>X $x <a style='text-decoration: none' href='cart.php?id=".$id."&action=remove'>Remove</a></td>";}
echo "<td align='right'>= Rs. $line_cost /=";
echo "</tr>";
}
echo "<tr>";
echo "<td></td>";
echo "<td align='right'><br>Total</td>";
echo "<td align='right'><b><br>= Rs. $total /=</b></td>";
echo "</tr>";
$message =$message."Total Cost : $total";
if(!empty($_SESSION['user'])){



if (isset($_POST['purchase']))
  {
 mail("drifftr@gmail.com", "order@dekma",$message, "From:" . $email);
  
/////////////////////////////////////////
$cartresult = mysql_query("SELECT cartid from cart");

while($crtrow = mysql_fetch_array($cartresult)){
$lastcartid=$crtrow['cartid'];
}
$cartid=$lastcartid+1;

 mysql_query("INSERT INTO cart (cartid,cusid,issued) VALUES ($cartid,$userid,'no')");
  echo "<tr>";
echo "<td>Thank You For Purchasing Our Products! <br>Your Cart Id is :$cartid</br>Please refer the cart id for future inquiries.</td>";
echo "</tr>";
 foreach($_SESSION['cart'] as $id2 => $x2)
{
  mysql_query("INSERT INTO cartbook (cartid,isbn,qty) VALUES ($cartid,$id2,$x2)");

}
unset($_SESSION['cart']);
  /////////////////////////////////////////////
  }else{
	  if($total!=0){
	  echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td align='right'><form action='cart.php?action=none' method='post' name='frm1'><input name='purchase' type='submit' value='Purchase' /></form></b></td>";
echo "</tr>";
	  }else{
		  unset($_SESSION['cart']);
		  }
	  
	  }
}else{
	echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td align='right'>Please Login To buy Cart</form></b></td>";
echo "</tr>";
	
	
	}

echo "</table>";
}
else
echo "Cart is empty";

?>
</html>