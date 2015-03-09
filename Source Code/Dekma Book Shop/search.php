<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
<style type="text/css">
#searchbox {
	background-color: #CCC;
	position: absolute;
	left: 4px;
	top: 7px;
	width: 333px;
	height: 107px;
	border:1px solid;
	border-radius:25px;
	box-shadow: 2px 2px 1px #888888;
}



</style>

</head>

<body>

</body>
<?php
session_start();
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
if(isset($_GET['btn'])){
	 $word = $_GET["word"];
 $searchby = $_GET["searchby"];
$result = mysql_query("SELECT * from book WHERE $searchby LIKE '%$word%'");
$top = 20;

while($row = mysql_fetch_array($result))
  {
	  if(!empty($result)){
	$title=  $row['title'];
	$author = $row['author'];
	$isbn  = $row['isbn'];
	$publisher = $row['publisher'];
	$category = $row['category'];
	$qty= $row['qty'];
	$desc= $row['desc'];
	$price = $row['price'];
	$height = $top."px";
	
	
   echo "<div id='item1' style='border: 3px solid #DADADA; border-radius:10px; border-image: -webkit-linear-gradient(270deg,#9B9B9B,#F6F6F6) 7 stretch; box-shadow: 0px 6px 10px #888888; position: absolute; left: 50px; top: $height; width: 611px; height: 208px;'>";
   echo "<div id='pic' style='position: absolute; left: 49px; top: 22px; width: 128px; height: 166px;'><img src='pics/$isbn.jpg' width='127' height='160' alt='missing' /></div> ";
   echo "<div id='detail' style='position: absolute; left: 255px; top: -20px; width: 312px; height: 204px;font-family: 'Times New Roman', Times, serif; font-weight: bold;'>";
   echo "<a style='text-decoration: none' href='item.php?itemid=$isbn'><h1 align='center'>$title</h1></a>";
   echo "Author :  $author<br>";
 //  echo "<p>ISBN: $isbn</p>";
 //  echo "Publisher: $publisher<br><br>";
   echo "Category :  $category<br><br>";
//   echo "<p>Desc: $desc</p>";
   echo "Price :  Rs. $price /= <br><br>";
   if($qty>0){
 echo "<a style='text-decoration: none' href='cart.php?action=add&id=$isbn'>Add To Cart</a> ";
 }
 else{
	echo "<p align='center'>Sorry! We dont have this book on our stocks</p>"; 
	 
	 }
   
   echo "</div>";
   echo "</div>";
  $top = $top + 228;
	  }else{
		  echo "<h3 align='center'>The book you searched is not avaiable on our stocks</h3>";
		  
		  
		  }
	  
	  
	  }
  
  

}
?>

</html>