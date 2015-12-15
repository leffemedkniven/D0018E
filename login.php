<?php
$connect = mysqli_connect('localhost','root','123','webshopdb') or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_select_db($connect,'webshopdb') or die(mysql_error());
echo "Connected to Database<br />"; 

$db=@$_POST['webshopdb'];
$username=@$_POST['username'];
$password= @$_POST['password'];

$sql= "SELECT password FROM account WHERE username='$username'";
$result= mysqli_query($connect, $sql);//fetch old password from database
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); //hämtar ut allt på raden
$temp = $row['password'];		//tilldelar password värdet

if($username == True){
	if($password == True){
		if($temp == $password){
              $sql= "SELECT username, password FROM account WHERE username='$username'";
                $result = mysqli_query($connect, $sql);//fetch password from database
                $row = mysqli_fetch_row($result); //hämtar ut allt på raden      
                $use = $row[0];
                $pass = $row[1];		//tilldelar password värdet
			if($username == $use && $password == $pass){
              session_start();
	               $_SESSION['username'] = $username;
	               $_SESSION['password'] = $pass;

			         echo $_SESSION['username'];
			         echo $_SESSION['password'];
                    header("Location: my_account.php");
                    exit();

                    } else{
	                   echo "wrong username/password";
                        header("Location: account.php");
                    }
		}else{
	       echo "wrong username/password";
           header("Location: account.php");
                    }
	}
}








?>