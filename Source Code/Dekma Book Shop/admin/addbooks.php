<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#add {
	position: absolute;
	left: 121px;
	top: 16px;
	width: 305px;
	height: 324px;
}
</style>
</head>

<body>
<div class="add" id="add">
<h1 align="center">Add Books</h1>
<form action="dbtools.php?action=add" method="post">
  <table width="329" height="311">
    <tr>
      <td width="177">ISBN</td>
      <td width="140"><label for="isbn"></label>
      <input type="text" name="isbn" id="isbn" /></td>
    </tr>
    <tr>
      <td>Title</td>
      <td><label for="title"></label>
      <input type="text" name="title" id="title" /></td>
    </tr>
    <tr>
      <td>Author</td>
      <td><label for="author"></label>
      <input type="text" name="author" id="author" /></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><label for="price"></label>
      <input type="text" name="price" id="price" /></td>
    </tr>
    <tr>
      <td>Category</td>
      <td><label for="category"></label>
      <input type="text" name="category" id="category" /></td>
    </tr>
    <tr>
      <td>Original Quantity</td>
      <td><label for="quantity"></label>
      <input type="text" name="quantity" id="quantity" /></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label for="desc"></label>
      <input type="text" name="desc" id="desc" /></td>
    </tr>
    <tr>
      <td>Publisher</td>
      <td><label for="publisher"></label>
      <input type="text" name="publisher" id="publisher" /></td>
    </tr>
        <tr>
      <td>&nbsp;</td>
      <td><center><input name="submit" type="submit" value="Add" /></center></td>
    </tr>
  </table>
  </form>
</div>
</body>
</html>