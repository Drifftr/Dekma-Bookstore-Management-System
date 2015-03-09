<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#add {
	position: absolute;
	left: 116px;
	top: 82px;
	width: 305px;
	height: 324px;
}
</style>
</head>

<body>
<h1 align="center">Edit Book</h1>
<div class="add" id="add">
<?php
session_start();
$id=$_GET["id"];
mysql_connect('localhost','root','kaputa');
mysql_select_db('dekma');
$result = mysql_query("SELECT * from book WHERE isbn=$id");
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
<form action="dbtools.php?action=edit&id=<?php echo $id;?>" method="post">
  <table width="329" height="311">
     <tr>
      <td>Title</td>
      <td><label for="title"></label>
      <input type="text" name="title" id="title" value="<?php echo $title;?>"/></td>
    </tr>
    <tr>
      <td>Author</td>
      <td><label for="author"></label>
      <input type="text" name="author" id="author" value="<?php echo $author;?>"/></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><label for="price"></label>
      <input type="text" name="price" id="price" value="<?php echo $price;?>"/></td>
    </tr>
    <tr>
      <td>Category</td>
      <td><label for="category"></label>
      <input type="text" name="category" id="category" value="<?php echo $category;?>"/></td>
    </tr>
    <tr>
      <td>Original Quantity</td>
      <td><label for="quantity"></label>
      <input type="text" name="quantity" id="quantity" value="<?php echo $qty;?>"/></td>
    </tr>
    <tr>
      <td>Publisher</td>
      <td><label for="publisher"></label>
      <input type="text" name="publisher" id="publisher" value="<?php echo $publisher;?>"/></td>
    </tr>
        <tr>
      <td>&nbsp;</td>
      <td><center><input name="submit" type="submit" value="Edit" /></center></td>
    </tr>
  </table>
  </form>
</div>
</body>
</html>