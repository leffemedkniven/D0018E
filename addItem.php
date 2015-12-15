<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
//echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
//echo "Connected to Database<br />";

session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];

$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
//echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
//echo "Connected to Database<br />";

$sql1 = "Fallout 4";

$sql = "INSERT INTO Shoppingcart_Item(name, quantity, Products_ID, Cart_ID) VALUES ($sql1, 1, (SELECT ID FROM Products WHERE Name='$sql1'), (SELECT ID FROM Cart WHERE Account_username = $username))";

mysqli_query($connect, $sql);    
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
 <a href="index.php" style="display:inline-block;"> 													<!-- 4. body-tagg  -->
  	<div id="header">
  	</div>
  </a>


  <div id="navigation">
  <ul class="navigation">
    <li><a href="index.php">Start</a>
    <li><a href="shop.html">Shop</a>
    <li><a href="about.html">About</a>
    <li><a href="account.php">Account</a>
    <li><a href="myShoppingCart.php">Shoppingcart</a>
  </ul>
  </div>

  <div id="content"><!-- InstanceBeginEditable name="Content" -->
    <center>
      Item added to shopping cart!
    </center>
  <!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>
