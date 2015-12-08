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
    <li><a href="../../HemsidaD0018Ev4/index.php">Start</a>
    <li><a href="../../HemsidaD0018Ev4/shop.html">Shop</a>
    <li><a href="../../HemsidaD0018Ev4/about.html">About</a>
    <li><a href="../../HemsidaD0018Ev4/account.php">Account</a>
    <li><a href="../../HemsidaD0018Ev4/myOrders.php">Shoppingcart</a>
  </ul>
  </div>

  <div id="content"><!-- InstanceBeginEditable name="Content" -->
    <center>
      <br>My Account</br>
<?php
/*      $connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />";
      
      $temp = array();
      
      $sql= "SELECT password, username FROM account WHERE username='$username'";
      $result= mysqli_query($connect, $sql);//fetch old password from database
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC); //hämtar ut allt på raden
      $temp[] = "{$row['password']} {$row['username']}";	
      
      print $temp*/
?>      
      <br>My Orders</br>

<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 


//INITIALIZE VARIABLES
$colsToDisplay = 7;
$htmlOutput    = array();

//GET ACCOUNT LIST
$sql = "SELECT username, password, city, adress WHERE account";
$result= mysqli_query($connect, $sql);
for($i=0; $row = $result->fetch_assoc(); $i++) {
         $htmlOutput[] = "<tr><td>{$row['username']}</td> <td>{$row['password']}</td> <td>{$row['city']}</td> <td>{$row['adress']}</td></tr>";
}


print '<table   >' . implode('', $htmlOutput) . '</table>' 
?>  

      
	    </center>
  <!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>
