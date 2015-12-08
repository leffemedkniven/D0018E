<?php
session_start();
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 


$username = $_POST["user_name"];
$password= $_POST['password'];


$sql= "SELECT username, password FROM account WHERE username='$username'";
$result = mysqli_query($connect, $sql);//fetch password from database
$row = mysqli_fetch_row($result); //hämtar ut allt på raden
$use = $row[0];
$pass = $row[1];		//tilldelar password värdet


if($username == $use && $password == $pass){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $pass;

			echo $_SESSION['username'];
			echo $_SESSION['password'];
	
}
else{
	throw new Exception('it aint working m8');
}

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
      
    </center>
  <!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>
