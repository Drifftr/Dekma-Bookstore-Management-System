<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

</style>
</head>
<?php 
session_start();
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
 if (isset($_GET['itemid']))
$itemid=$_GET['itemid'];
$result = mysql_query("SELECT * from book WHERE isbn=$itemid");
	if(isset($_GET['remove'])){
			$remcmntid=$_GET['remcmntid'];
			mysql_query("DELETE FROM comments WHERE cmntid=$remcmntid");
		}	
	if(!empty($_SESSION['user'])){
		$usernm=$_SESSION['user'];
		$userid=$_SESSION['userid'];
		
	}
	if(isset($_GET['cmntval'])){
			$cmntval=$_GET['cmntval'];
			mysql_query("INSERT INTO comments (value, isbn, cusid) VALUES ('$cmntval', $itemid,$userid)");
		}
		
$row = mysql_fetch_array($result);
	$title=  $row['title'];
	$author = $row['author'];
	$isbn  = $row['isbn'];
	$publisher = $row['publisher'];
	$category = $row['category'];
	$qty= $row['qty'];
	$desc= $row['desc'];
	$price = $row['price'];
?>
<body>
<div id='item1' style='background-color: transparent; border:0px solid; border-radius:10px; position: absolute; left: 30px; top: $height; width: 719px; height: 497px; top: 14px;'>
<div id='pic' style='position: absolute; left: 32px; top: 70px; width: 187px; height: 219px;'><img src='pics/<?php echo $isbn?>.jpg' width='187' height='218' alt='missing' /></div> 
<div id='detail' style='position: absolute; left: 252px; top: -7px; width: 312px; height: 492px;font-family: 'Times New Roman', Times, serif; font-weight: bold;'>
<h1 align='center'><?php echo $title?></h1>
<p>Author : <?php echo $author?></p>
<p>ISBN: <?php echo $isbn?></p>
<p>Publisher: <?php echo $publisher?></p>
<p>Category : <?php echo $category?></p>
<p>Desc: <?php echo $desc?></p>
<p>Qunatity On Stock: <?php echo $qty?></p>
<p align="center">Price :  Rs.<?php echo $price?> /= </p>
<?php
if($qty>0){
 echo "<a style='text-decoration: none' href='edit.php?id=$isbn'><p align='center'>Edit This Book</p></a>";
 }
 else{
	echo "<p align='center'>Sorry! We dont have this book on our stocks at the moment</p>"; 
	 
	 }
 
 ?>
 
</div>
</div>
<?php 

	
	
	/*
$userresult = mysql_query("SELECT * from customer WHERE cusid=$userid");
$userrow = mysql_fetch_array($userresult);
$username = $userrow['username'];
}*/

$cmntresult = mysql_query("SELECT * from comments natural join customer WHERE isbn=$isbn order by cmntid");
$top = 520;

while($cmnts = mysql_fetch_array($cmntresult)){
	$cmntid = $cmnts['cmntid'];
	$cmntuser = $cmnts['username'];
	$cmntvalue = $cmnts['value'];
	$height = $top."px";
	
	echo "<div style='border: 3px solid #fff; border-radius:10px;  box-shadow: 0px 6px 10px #888888; background:-moz-linear-gradient(top,#3DA8DC 2%,#FFF 100%);
	background:-webkit-linear-gradient(top,#3DA8DC 2%,#FFF 100%);
	background:-o-linear-gradient(top,#3DA8DC 2%,#FFF 100%); border-radius:10px; position: absolute; left: 30px; top: $height; width: 620px; height: 105px;' id='comment'>";
	echo "<div style='position: absolute; border: 0px; left: 15px; top: 7px; width: 54px; height: 82px;' id='propic'>";
	echo "<table width='50' border='0'>";
	echo "<tr>";
	echo "<td><img src='pics/user.png' width='49' height='50' alt='missing' /></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p align='center'>$cmntuser</p></td>";
	echo "</tr>";
	echo "</table>";
	echo " </div>";
	echo "<div class='cmnt' style='position: absolute; left: 98px; top: 29px; width: 562px; height: 52px;' id='cmnt'>$cmntvalue<br>";
  
   
		echo "<p style='left:580px'><a style='text-decoration: none' href='item.php?remcmntid=$cmntid&itemid=$isbn&remove='Remove''>Remove</a></p>";
		
			
			
	echo "</div>";
	echo "</div>";
	$top = $top + 120;
}

if(!empty($_SESSION['user'])){
	$height2=$top."px";
	echo "<div style='border: 3px solid #fff; border-radius:10px; box-shadow: 0px 6px 10px #888888; background:-moz-linear-gradient(top,#3DA8DC 2%,#FFF 100%);
	background:-webkit-linear-gradient(top,#3DA8DC 2%,#FFF 100%);
	background:-o-linear-gradient(top,#3DA8DC 2%,#FFF 100%); position: absolute; left: 30px; top: $height2; width: 620px; height: 105px;' id='comment'>";
	echo "<div style='position: absolute; border: 0px; left: 15px; top: 7px; width: 54px; height: 82px;' id='propic'>";
	echo "<table width='50' border='0'>";
	echo "<tr>";
	echo "<td><img src='pics/user.png' width='49' height='50' alt='missing' /></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p align='center'>$usernm</p></td>";
	echo "</tr>";
	echo "</table>";
	echo " </div>";
	echo "<div class='cmnt' style='position: absolute; left: 98px; top: 29px; width: 562px; height: 52px;' id='cmnt'><form action='item.php' method='get' id='cmntbox' name='cmntbox'><input name='itemid' type='hidden' value='$isbn' /><input style='height:100 width:500' id='cmntval' name='cmntval' type='text' /><br>";
	echo "<p style='left:580px'><input name='pos' type='submit' value='Post' /></p>";
	echo "</form>";
	
	echo "</div>";
	echo "</div>";
	
	}





?>


        
      
    
 
  
</body>
</html>