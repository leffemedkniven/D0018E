<?php 

//echo $_SESSION['username'];

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
    <?php $order_id = $_GET["order_id"]; ?>
        <br> Order <?php echo $order_id?></br>

<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />";
session_start();
$username = $_SESSION['username'];    
//INITIALIZE VARIABLES
$colsToDisplay = 7;
$htmlOutput    = array();

//GET LIST
$sql = "SELECT products_ID FROM order_item WHERE orders_id='$order_id'";    
$result= mysqli_query($connect, $sql);
   echo "$username"; 
for($i=0; $row = $result->fetch_assoc(); $i++) {
      $prod_id = $row['products_ID'];
        echo $prod_id;
        $sql = "SELECT name, price FROM products WHERE id='$prod_id'";
        echo $sql;
        $result= mysqli_query($connect, $sql);
        $htmlOutput[] = "<tr><td>{$row['name']}</td><td>{$row['price']}</td></tr>";
        
}

print '<table>' . implode('', $htmlOutput) . '</table>' 
        
    
?>  
      	
    </center>
  </div>
</body>
</html>