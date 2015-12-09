
<html>

<link rel="stylesheet" href="css.css">    

</html>

<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 


//INITIALIZE VARIABLES
$colsToDisplay = 7;
$htmlOutput    = array();

//GET ACCOUNT LIST
$sql = "SELECT username, password, city, adress, zipcode FROM account";
$result= mysqli_query($connect, $sql);
for($i=0; $row = $result->fetch_assoc(); $i++) {
         $htmlOutput[] = "<tr><td>{$row['username']}</td> <td>{$row['password']}</td> <td>{$row['city']}</td> <td>{$row['adress']}</td></tr>";
}


print '<table   >' . implode('', $htmlOutput) . '</table>' 
?>  

