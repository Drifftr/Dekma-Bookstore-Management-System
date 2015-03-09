<?php
session_start();
mysql_connect('localhost','root','kaputa');
mysql_select_db('dekma');
$action=$_GET["action"];
if($action=='add'){
if(isset($_POST['submit'])){
		
		$isbn=$_POST['isbn'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$publisher=$_POST['publisher'];
		$qty=$_POST['quantity'];
		
		
		
		
	if(mysql_query( "INSERT INTO book(isbn,title,author,price,category,originalqty,qty,publisher) VALUES($isbn,'$title','$author',$price,'$category',$qty,$qty,'$publisher')"))
	{	echo "<h1><p align='center'>Added Successfully</p></h1><br>";}
		}
		
		
}else if($action=='remove'){
	$rid=$_GET["id"];
	mysql_query( "DELETE FROM book WHERE isbn=$rid");
	
	
	echo "<h1><p align='center'>Book removed Successfully</p></h1><br>";
	
	}else if($action=='edit'){
		$eid=$_GET["id"];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$publisher=$_POST['publisher'];
		$qty=$_POST['quantity'];
		
		
		if(mysql_query("UPDATE book SET title='$title',author='$author',price=$price,category='$category',publisher='$publisher',originalqty=$qty WHERE isbn=$eid"))	
		echo "<h1><p align='center'>Book Edited Successfully</p></h1><br>";
		}


?>