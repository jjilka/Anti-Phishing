<?php
session_start();

//echo "hi" ;

$con=mysqli_connect("localhost","knowportal_bk","qwerty","knowportal_bk1");
// Check connection

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
	$result = mysqli_query($con,"SELECT * FROM users where username LIKE '$_SESSION[username]'");

while($row = mysqli_fetch_array($result))
  {
   $balance=$row["Balance"];
   }
   echo "Rs. ".$balance."/-" ;
?>