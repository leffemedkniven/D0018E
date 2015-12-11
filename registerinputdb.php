<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 

$username = $_POST["user_name"];
$first_name = $_POST["first_name"];
$surname = $_POST["last_name"];
$adress = $_POST["adress"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];    
$password = $_POST["password"];
$repeat_password = $_POST["repeat_password"];


$sql= "SELECT username FROM account WHERE username='$username'";
$result= mysqli_query($connect, $sql);//fetch old password from database
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); //hämtar ut allt på raden
$temp = $row['username'];		//tilldelar password värdet
if($temp != NULL){
    if($temp == $username){
        echo "Error: E-mail already used.";}
    }else{

        if($username == true) {
            if($first_name == true){
                if($surname == true){
                    if($adress == true){
                        if($city == true){
                            if($zipcode == true){
                                if($password == true) {
                                    if($repeat_password == true) {
                                        if($repeat_password == $password){    
                                            $sql = "INSERT into Shopping_Cart (ID)       
                                                            VALUES('$username')";
                                            if(mysqli_query($connect, $sql)) {
                                                    $sql = "INSERT into account (username, Name, Lastname, city, adress, zipcode, password)       
                                                        VALUES('$username','$first_name','$surname','$city','$adress','$zipcode','$password')";
                                                if(mysqli_query($connect, $sql)) {
                                                    echo "New account created successfully";

                                            } else {
                                                echo "Error: " . $sql . "<br>" . mysqli_error($connect);}
                                        } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($connect);}
                                    } else{
                                        echo "Error: The passwords does not match.";}
                                } else{
                                     echo "Error: Repeat Password.";}
                            }else{
                                echo "Error: Submit Password.";}
                            }else{
                                echo "Error: Submit Zipcode.";} 
                        }else{
                        echo "Error: Submit City.";}  
                    }else{
                        echo "Error: Submit Adress.";}    
                }else{
                echo "Error: Submit Surname.";}
            }else{
                echo "Error: Submit First Name.";}

        }else{
                echo "Error: Submit E-mail.";}    
}
