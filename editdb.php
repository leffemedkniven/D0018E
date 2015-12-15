

<?php
$servername = "localhost";
$username = "nikbry-1";
$password = "pass";
//connecting
$conn =  mysql_connect($servername, $username, $password); 

//check connection
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
   
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$user_name = $_POST["user_name"];
$password = $_POST["password"];


//echo $first_name."\n";
//echo $last_name."\n";
//echo $user_name."\n";
//echo $password."\n";

/*$sql_query_u_name = "select * from 'user' where 'u_name' = '$user_name'";
$result = mysql_query ($sql_query_u_name) or die (mysql_error());

if($result){
echo "user name alredy exists choose another one";
}
else{
$sql_entry = "insert into user (first_name, last_name, u_name, password) values('$first_name','$last_name','$user_name','$password')";

mysql_select_db('nikbry1db');
$retval = mysql_query( $sql_entry, $conn );

if(!$retval )
{
      die('Could not enter data: ' . mysql_error());
}
   
   echo "Entered data successfully\n";
}*/

$sql_entry = "insert into user (first_name, last_name, u_name, password) values('$first_name','$last_name','$user_name','$password')";

mysql_select_db('nikbry1db');
$retval = mysql_query( $sql_entry, $conn );

if(!$retval )
{
      die('Could not enter data: ' . mysql_error());
}
   
   echo "Entered data successfully\n";



mysql_close($conn);
?>


