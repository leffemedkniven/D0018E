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
      <label>Username</label>
<input type="text" name="username" />
<br />
<label>Old password</label>
<input type="text" name="old_password" />
<br />
<label>New Password</label>
<input type="text" name="new_password" />
<br />
<label>New Password</label>
<input type="text" name="repeat_password" />
 
<br />
<input type="submit" value="Change password">
</form>
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
$old_password= @$_POST['old_password'];
$new_password=@$_POST['new_password'];
$repeat_password=@$_POST['repeat_password'];

echo "$username<br />";
echo "$new_password<br />";

$sql= "SELECT password FROM account WHERE username='$username'";
$result= mysqli_query($connect, $sql);//fetch old password from database
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); //hämtar ut allt på raden
$temp = $row['password'];		//tilldelar password värdet

if($username == true) { 
    if($old_password == true) { 
        if($new_password == true) { 
            if($repeat_password == true) {
                    if($old_password == $temp){               
                        $sql = "UPDATE account SET password='$new_password' WHERE username='$username'";
                            if(mysqli_query($connect, $sql)) {
                                    echo "New record created successfully";
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);}
                     } else{
                    echo "Error: Submit Wrong Password";}
            } else{
                    echo "Error: Submit Repeat Password";}
        } else{
            echo "Error: Submit New Password";}
    }else{
        echo "Error: Submit Old Password";}
}else{
        echo "Error: Submit Username";}


?>
