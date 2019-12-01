<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LoginSystem";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
$name = $_POST["email"];
$passw = $_POST["pass"];
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user WHERE username='$name' and password='$passw' "; 
$result = $conn->query($sql);

//$_SESSION["userid"]= "$passw";

//cho  $_SESSION["userid"];
if ( !$result ||mysqli_num_rows($result)!=0) 
{
  
    // output data of each row
    //while($row = mysqli_fetch_assoc($result)) {
    	//echo "username exist" ."<br>";
        //echo "username: " . $row["username"]. " - password: " . $row["password"]. " " . "<br>";
		
		
		session_start();
		$_SESSION["userid"]= "$name";
		
      if(isset($_SESSION["userid"]))
		{header("Location: endpage.php");}
     else{

     }
   
}

 
else {
	//echo '<script language="javascript">';
	//echo 'alert("Invalid Username/ Password")';
	//echo 'window.location = ".\loginreg\Login_v1\index.html"';
	//echo '</script>';

	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Username Password');
    window.location.href='./loginreg/Login_v1/index.html';
    </script>");

	//header("Location: .\loginreg\Login_v1\index.html");
	exit;	
   // echo "username doesnt exist";
}

mysqli_close($conn);
?>