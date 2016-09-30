<html>
<head><title>forgot password</title>
</head>
<body bgcolor="black">
<?php
session_start();
 
$con=mysqli_connect("localhost","knowportal_bk","qwerty","knowportal_bk1");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$_SESSION["user"]=$_POST["user"];
	$result = mysqli_query($con,"SELECT * FROM users where username LIKE '$_POST[user]'");

while($row = mysqli_fetch_array($result))
  {
   $question=$row["question"] ;
   $_SESSION["ans"]=$row["answer"] ;
   $_SESSION["pass"]=$row["password"] ;
  }
echo "<font color='red'> <h4>Step 2:</h4>" ;
echo $question ;
echo "" ;
echo "<form name='forgotpass2' action='finalpass.php' method='POST'><input type='text' name='ans' id='ans'>
<input type='submit' value='submit'>
</form></font>" ;

?>
</body>
</html>