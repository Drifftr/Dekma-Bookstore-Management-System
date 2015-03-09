<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dekma Booshop  |  Books For Your Life</title>

<script type="text/javascript" src="jquery-1.2.6.min.js"></script>

 <script type="text/javascript">

function slideSwitch() {
    var $active = $('#image IMG.active');

    if ( $active.length == 0 ) $active = $('#image IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#image IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    	// var $sibs  = $active.siblings();
    	// var rndNum = Math.floor(Math.random() * $sibs.length );
    	// var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 2000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 6000 );
});

</script>  

<style type="text/css">
#page {
	background-image: url(pics/cool-white-background-designs-i15%20copy.jpg);
	margin: auto;
	
	/*background-color: #E9E9E9;*/
	background-repeat:repeat;
	background-position: left top;
	border-radius:10px;
	position: relative;
	width: 960px;
	height: 1635px;
	/*left: 145px;*/
	top: 15px;
	overflow:hidden;
	border: 1px solid rgba(0,0,0,0.5); 
  
   box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);

}

 #mainsearch {
	 z-index:15;
	 border: 1px solid rgba(0.5,0.5,0.5,0.5); 
   background: rgba(0,0,0,0.1);
   box-shadow: 0 2px 6px rgba(0,0,0,0.05), inset 0 1px rgba(255,255,255,0.03), inset 0 10px rgba(255,255,255,0.02), inset 0 10px 20px rgba(255,255,255,0.025), inset 0 -15px 30px rgba(0,0,0,0.03);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);

	 background: -moz-linear-gradient(top, #3366cc, #33ffff); 
	 background: -webkit-linear-gradient(top, #3366cc, #33ffff); 
	 background: -o-linear-gradient(top, #3366cc, #33ffff);
	opacity:0.8;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;
	font-weight:bold;
	text-align:center;
	padding-top:5px;
	padding-bottom:5px;
	color: #000;
	/*border:2px solid #00D500;*/
	border-radius:50px;
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
	position: absolute;
	width: 200px;
	height: 21px;
	left: 174px;
	top: 271px;	
 }
 #mainsearch:hover {
		 opacity:1.0;
	  color:#0000cc;
	}
 #mainsearch div{
	opacity:0.7;
	-moz-transition: height 0.5s,width 0.1s, -moz-transform 0.5s;
	-webkit-transition: height 0.5s,width 0.1s, -webkit-transform 0.5s;
	-o-transition: height 0.5s,width 0.1s, -o-transform 0.5s;
     visibility:hidden;
	 }
 #mainsearch:hover div{
	 font-family: Arial, Helvetica, sans-serif;
	 font-size: 12px;
	 font-weight:normal;
	 text-align:left;
	 border-radius:8px;
	 z-index:-1;
     width:200px;
     height:100px;
	 visibility:visible;
	 background-color:#33ffff;
	 }
		 
#log {
	background-color: transparent;
	height: 162px;
	width: 277px;
	position: absolute;
	border:2px solid #2992ff;
	border-radius:25px;
	left: 660px;
	top: 8px;
	text-align: left;
}

  #maintool {
     border: 1px solid rgba(0.5,0.5,0.5,0.5); 
   background: rgba(0,0,0,0.1);
   box-shadow: 0 2px 6px rgba(0,0,0,0.05), inset 0 1px rgba(255,255,255,0.03), inset 0 10px rgba(255,255,255,0.02), inset 0 10px 20px rgba(255,255,255,0.025), inset 0 -15px 30px rgba(0,0,0,0.03);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);

	 background: -moz-linear-gradient(top, #3366cc, #33ffff); 
	 background: -webkit-linear-gradient(top, #3366cc, #33ffff); 
	 background: -o-linear-gradient(top, #3366cc, #33ffff);
	
	opacity:0.8;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;
	font-weight:bold;
	text-align:center;
	padding-top:5px;
	padding-bottom:5px;
	color: #000;
	/*border:2px solid #00D500;*/
	border-radius:50px;
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
	position: absolute;
	width: 200px;
	height: 21px;
	left: 174px;
	top: 271px;
 }
 #maintool:hover {
	opacity:1.0;
	 color:#0000cc;
	 
 }

#menubar {
	background-color: transparent;
	position: absolute;
	height: 82px;
	width: 1006px;
	left: 1px;
	top: 176px;
	border-top:2px solid #2992ff;
}
#logo {
	background-color: transparent;
	height: 172px;
	width: 960px;
	position: absolute;
	top: 0px;
}
#foot {
	opacity:0.7;
	background-color: transparent;
	position: absolute;
	width: 959px;
	height: 96px;
	left: 2px;
	top: 1536px;
}
#content {
	border: 1px solid rgba(0,0,0,0.5); 
   background: rgba(0,0,0,0.05);
   box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
	/*background:-moz-linear-gradient(top,#E1F0FF,#D5FAB4);
	background:-webkit-linear-gradient(top,#E1F0FF,#D5FAB4);
	background:-o-linear-gradient(top,#E1F0FF,#D5FAB4);*/
	/*border-top:1px solid #E2F3E3;
	border-left:1px solid #E2F3E3;*/
	border-radius:20px;
	/*box-shadow: 10px 10px 5px #888888;*/
	position: absolute;
	left: 225px;
	top: 508px;
	width: 715px;
	height: 1002px;
}

  #image {
  /* border: 1px solid rgba(0,0,0,0,0.5); */
   background: rgba(0,0,0,0.05);
   box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
	/*opacity:1.0;
	/*background-image:url(book-dominoes-orig-image-.jpg);*/
	position:absolute; 
	left: 225px;
	top: 250px;
	width: 715px;
	height: 253px;
	/*border:2px solid #00D500;*/
	border-radius:15px;
	/*box-shadow: 10px 10px 5px #888888;
	-webkit-box-shadow: 10px 10px 5px #888888;
	-o-box-shadow: 10px 10px 5px #888888;*/
	overflow:hidden;
	
  }
  #image IMG {
	position:absolute;
	top:0px;
    z-index:-3;
	opacity:0.0;
	left: 0px;
	-moz-border-radius:15px;
    -webkit-border-radius:15px;
    -o-border-radius:15px;
  }

 #image IMG.active {
    z-index:0;
    opacity:1.0;
	border-radius:15px;
 }

 #image IMG.last-active {
    z-index:0;
	border-radius:15px;
  }

#addimage {
	
	width:140px;
	height:200px;
	
	
	
	}

#tool {
	border: 1px solid rgba(0,0,0,0.5);
	background: rgba(0,0,0,0.05);
	box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
	-o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
	-webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
	-moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.03);
	/*background:-moz-linear-gradient(top,#E1F0FF,#D5FAB4);
	background:-webkit-linear-gradient(top,#E1F0FF,#D5FAB4);
	background:-o-linear-gradient(top,#E1F0FF,#D5FAB4);*/
	/*border-top:2px solid #A8E3B0;*/
	/*border-left:2px solid #A8E3B0;*/
	border-radius:20px;
	/*box-shadow: 10px 10px 5px #888888;*/
	position: absolute;
	height: 1267px;
	width: 191px;
	left: 20px;
	top: 250px;
}

</style>
</head>
<script type="text/javascript" src="jquery.js"></script>
 <?php //session_start();
  
  if(!empty($_SESSION['user'])){
	  $iframe_src = 'login.php';
	  	  
  		}
	else{
		$iframe_src = 'logbox.php';} ?>
        
<body bgcolor="#3A3A3A" style="height:1665px" >
<div class="page" id="page" align="center">
  <div class="logo" id="logo" align="center"><a href="home.php" target="cont"><img src="pics/logo114.png" width="960" height="172" /></a>
    <div class="content" id="content"><iframe name="cont" id="cont" src="Home.php" frameborder="0" height="1002px" width="721px" ></iframe></div>
  </div>
  
     <div id="image" >
       <img src="pics/fade/books-shutterstock-library.jpg"  alt="image Image 1" class="active" width="715px" height="253px"/>   
       <img src="pics/fade/books-feet-float-imagination-steps-Favim.com-124434.jpg"  alt="image Image 3" width="715px" height="253px" style="border-radius:15px;"/>
       <img src="pics/fade/book-dominoes-orig-image-theamazingworldofpshychiatrywordpress.jpg"  alt="image Image 4" width="715px" height="253px" style="border-radius:15px;"/>
       <img src="pics/fade/serious-students-looking_~k7407953.jpg"  alt="image Image 5" width="715" height="253px" style="border-radius:15px;"/>
       <img src="pics/fade/books460.jpg"  alt="image Image 6" width="715" height="253px" style="border-radius:15px;"/>
  </div>
  
  <div class="log" id="log" >
<iframe id="logi" frameborder="0" name="logi" src="login.php" allowtransparency="true"  height="162px" width="280px">

  </iframe>  </div>
  <div class="menubar" id="menubar">
    <a href="home.php" target="cont"><div id="maintool" style="left:22px; top:20px; color:#0000cc; opacity:1.0">Home</div></a>
       <a href="cart.php?action=none&id=001" target="cont"><div id="maintool" style="left:204px; top:15px">Cart</div></a>
       <a href="ContactUs.php" target="cont"><div id="maintool" style="left:746px; top:20px">Contact Us</div></a>
    <a href="catbox.php" target="toolbox"><a href="books.php?cat=all" target="cont"><div id="maintool" style="left:563px; top:15px">Books</div></a>
    <div id="mainsearch" style="left:382px; top:10px">Search<div>
    
    <form action="search.php" method="get" enctype="multipart/form-data" name="search" id="search" target="cont">
  <table width="200" height="98" border="0">
    <tr>
      <td width="188" align="justify">
        <label for="word"></label>
        Key:<input type="text" name="word" id="word" size="15px"/>
      </td>
    </tr>
    <tr>
        <td align="justify">
        <label for="searchby"></label>
        <label for="searchby"></label>
        By :  
        <select name="searchby" id="searchby">
          <option value="title" selected="selected">Title</option>
          <option value="author">Author</option>
          <option value="isbn">ISBN</option>
          <option value="publisher">Publisher</option>
        </select></td>
    </tr>
    <tr>
      
      <td align="center"><input type="submit" name="btn" id="btn" value="Search" /></td>
    </tr>
  </table>
  </form>
    
    
    
    
    
    </div></div>
    
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="footer" id="footer"></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="tool" id="tool"><!-- <iframe id="toolbox" frameborder="0" height="1002px" width="226px" >  -->
 <div style="position:absolute; top: 1px; width:140px; height: 2913px; left: 27px;"><center><h3>Best Sellers</h3> <marquee behavior="alternate"  height="1200px" width="140px" direction="down" onmouseover="this.stop();" onmouseout="this.start();">

	 <?php
 mysql_connect('localhost','root','kaputa');
 mysql_select_db('dekma');
 $result = mysql_query("SELECT isbn FROM cartbook c group by isbn order by count(isbn) desc limit 10");
 while($row = mysql_fetch_array($result))
  {
	  $isbn=  $row['isbn'];
 	echo "<a style='text-decoration: none;' href='item.php?itemid=$isbn' target='cont'><img src='pics/$isbn.jpg'  id='addimage'></a><br><br><br><br>";
  }
 ?>		

			</marquee></center></div>
  
  
 <!-- </iframe>--> </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="foot" id="foot"><hr size="1" class="hr" />
<p align="center" style="border:thin; border-radius:50px; ">Copyright &copy; 2012  Dekma Bookshop Inc. All Rights Reserved. Designated   trademarks and brands are the property of their respective owners. Use   of this Web site constitutes acceptance of the Dekma User Agreement and Privacy Policy.</p></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>