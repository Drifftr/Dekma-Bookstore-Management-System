<?php 
session_start();
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
 if(isset($_GET['logid'])){
	
	
	
	 $_SESSION['user'] = '';
	unset($_SESSION['user']);
	$_SESSION['userid'] = '';
	unset($_SESSION['userid']);
	
	}else{
		
		}
		
if(!empty($_SESSION['user'])){

		echo "Welcome to Dekma Bookshop ".$_SESSION['user'];
		echo "<br><a href='../Base.php' target='_parent'>Back To Site</a>";
	
	
	}
 else{
	 
if(isset($_POST['btn'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$query ="select * From customer where username='$user' and password='$pass'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if(mysql_num_rows($result)>0){
		$_SESSION['user'] = $user;
		$_SESSION['userid'] = $row['cusid'];
		setcookie("user",$user, time() + (86400 * 7));
		echo "Welcome to Dekma Bookshop $user ";
		echo "<br><a href='../Base.php' target='_parent'>Back To Site</a>";
		
	}else{
		include 'logbox.php';
		
		echo "<a href='wrong.php' target='cont'>Did you forget your Password?</a>";
			}
		
		
		}else{
				
				include 'logbox.php';
				
				}
	
	


 }


 ?>
 