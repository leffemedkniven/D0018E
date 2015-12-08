<?php
session_start();
echo $_SESSION['username'],"<br />";
echo $_SESSION['password'],"<br />";
?>

<html><!-- InstanceBegin template="/Templates/homewebbshop.dwt" codeOutsideHTMLIsLocked="false" --> 													<!-- 1. Html-tagg -->

<head> 													<!-- 2. Head-tagg -->
<!-- InstanceBeginEditable name="doctitle" -->
<title>PCMASTERRACE</title>
<!-- InstanceEndEditable -->
<!-- 3. title-tagg  -->

  <link rel="stylesheet" href="css.css">
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
</head>

<body> 													<!-- 4. body-tagg  -->
 <a href="index.html" style="display:inline-block;"> 													<!-- 4. body-tagg  -->
  	<div id="header">
  	</div>
  </a>


  <div id="navigation">
  <ul class="navigation">
    <li><a href="index.php">Start</a>
    <li><a href="shop.html">Shop</a>
    <li><a href="about.html">About</a>
    <li><a href="account.php">Account</a>
  </ul>
  </div>

  <div id="content"><!-- InstanceBeginEditable name="Content" -->
    <center>
<br>Fallout 4</br><br></br>
    	Very nice game, you can buy now or maybe no. 
    </center>
	<div id="game1"></div>
	<center>
	<div>
	
	
	<input type="image" src="buy.jpg" name="buy" class="btTxt submit" id="buy">
	</div>
    </center>
  <!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>

<?php

$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 

	
	//$db=@$_POST['webshopdb'];
	//$id=@$_POST('1')
	
	//$sql= "SELECT image FROM products WHERE ID='$id'";
	
	//$sql=INSERT INTO shopping_cart[]();
	
	
?>