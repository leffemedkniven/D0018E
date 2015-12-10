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
      <h1>Login</h1>
		<form action="my_account.php" method="post">
        Username : <input type="text" name="user_name"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="Submit"><br>
		<a href="register.html" class="button">New Account</a>
        <a href="changepassword.php" class="button">Change Password</a>
		
    </center>
  <!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>

<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 

$db=@$_POST['webshopdb'];
$username=@$_POST['username'];
$password= @$_POST['password'];

echo "$username<br />";
echo "$new_password<br />";

$sql= "SELECT password FROM account WHERE username='$username'";
$result= mysqli_query($connect, $sql);//fetch old password from database
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); //hämtar ut allt på raden
$temp = $row['password'];		//tilldelar password värdet

if($username == True){
	if($password == True){
		if($temp == $password){
			
		}
	}
}
    
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
	echo "wrong username/password";
}


?>