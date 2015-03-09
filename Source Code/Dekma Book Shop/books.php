<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#catbox {
	position: absolute;
	width: 112px;
	height: 289px;
	left: 5px;
	top: 44px;
}
  #book_image {
	opacity:0.8;
	width:77px;
	height:100px;
	-moz-transition:width 0.5s, height 0.5s, -moz-transform 0.5s;
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
	-o-transition:width 0.5s, height 0.5s, -o-transform 0.5s;
}
  #book_image:hover {
	  opacity:1.0;
	  width:95px;
	  height:132px;
  }
 

#catbox {
	position: absolute;
}

#catergari {
	opacity:0.9;
	border-radius:20px;
    background:none;
	height: 33px;
	width: 104px;
	left: 3px;
	transition-property: background;
	transition-property: color;
	transition-duration: 0.3s;
	transition-timing-function: ease;
	-webkit-transition-property: background;
	-webkit-transition-property: color;
	-webkit-transition-duration: 0.3s;
	-webkit-transition-timing-function: ease;
	-o-transition-property: background;
	-o-transition-property: color;
	-o-transition-duration: 0.3s;
	-o-transition-timing-function: ease;
}
#catergari:hover {
	
   background:-moz-linear-gradient(left,#0D86FF ,#ECECEC );
	background:-webkit-linear-gradient(left,#0D86FF,#ECECEC);
	background:-o-linear-gradient(left,#0D86FF,#ECECEC);
}


</style>
</head>

<body>
<body>
<div class="catbox" id="catbox">
 
  <a style='text-decoration: none' href="books.php?cat=horror" target="cont"><div id="catergari" style="position:absolute; top:4px"> &nbsp;&nbsp;&nbsp;&nbsp;Horror</div></a>
  <a style='text-decoration: none' href="books.php?cat=comedy" target="cont"><div id="catergari" style="position:absolute; top:42px"> &nbsp;&nbsp;&nbsp;&nbsp;Commedy</div></a>
  <a style='text-decoration: none' href="books.php?cat=all" target="cont"><div id="catergari" style="position:absolute; top:80px"> &nbsp;&nbsp;&nbsp;&nbsp;All</div></a>
  <a style='text-decoration: none' href="books.php?cat=horror" target="cont"><div id="catergari" style="position:absolute; top:156px"> &nbsp;&nbsp;&nbsp;&nbsp;Horror</div></a>
  <a style='text-decoration: none' href="books.php?cat=horror" target="cont"><div id="catergari" style="position:absolute; top:118px"> &nbsp;&nbsp;&nbsp;&nbsp;Horror</div></a>
</div>


<p align=''>
 <?php
 session_start();
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
 
 if(isset($_GET['cat'])){
	 $category=$_GET['cat'];
	 }else{
		 $category="all";
		 }
  $i=1;
 $l=115;	
 $t=44;
 if($category=="all"){
	 $result = mysql_query("SELECT * from book");
	 }else
{ $result = mysql_query("SELECT * from book WHERE category = '$category'");
}
 while($row = mysql_fetch_array($result))
  {
	  if($i%5==0){
		 $l=115;
	 	 $t+=250;
	     $i++;
	 }
	$title=  $row['title'];
	$isbn  = $row['isbn'];
	$qty= $row['qty'];
	$price = $row['price'];  
	$left=$l."px";
	$top=$t."px";
	
	 

  echo "<div id='bookbox' style=' position: absolute; width: 120px; height: 221px; left: $left; top: $top;'>";
  echo "<div id='catpic' style='position: absolute; left: 14px; top: 5px;'><a style='text-decoration: none;' href='item.php?itemid=$isbn'><img src='pics/$isbn.jpg' width='105' height='139' alt='pic missing' id='book_image' /></a></div>";
   echo " <div id='catdet' style='position: absolute; left: 11px; top: 116px; width: 95px; height: 93px;' ><p align='justify'><a style='text-decoration: none' href='item.php?itemid=$isbn'>$title</a><br>Rs. $price /=<br>";
   if($qty>0){
 echo "<a style='text-decoration: none' href='cart.php?action=add&id=$isbn'>Add To Cart</a></p> </div></div>";
 }
 //style='position: absolute;	width: 163px;	top: 209px;	height: 37px; left: 46px;' //style='position: absolute;left: 78px;	top: 47px;width: 103px;	height: 138px;'
 else{
	echo "Out Of Stock</p> </div></div>"; 
	 
	 }
   // echo " <p>&nbsp;</p>";

   $i++;
   $l+=155;
  }
   ?>


<p align=''>
</body>
</html>