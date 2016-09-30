<html>
<head><title>forgot password</title>
</head>
<body bgcolor="black">
<font color="blue">
<?php
 
 session_start();
 if(isset($_SESSION["ans"])&&isset($_SESSION["pass"]))
 {
 $pass=$_SESSION["pass"];
 
if($_POST["ans"]==$_SESSION["ans"])
{

$con=mysqli_connect("localhost","knowportal_bk","qwerty","knowportal_bk1");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
	$result = mysqli_query($con,"SELECT * FROM users where username LIKE '$_SESSION[user]'");

while($row = mysqli_fetch_array($result))
  {
   $mobileno=$row["mobile_no"] ;
   $emailid=$row["email_id"] ;
  
  }
/*
  $message="Your Password is : ".$pass ;
$to=$emailid ;
	 //echo $to ;
	 ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('max_execution_time', 3000);
require_once 'mail/lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('yashtare1992')
  ->setPassword('ShubhangiAjay1')
  ;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Password Recovery')
  ->setFrom(array('bankofatharva@gmail.com' => 'Bank of Atharva'))
  ->setTo(array($to))
  ->setBody($message)
  ;

// Send the message
$result = $mailer->send($message);
*/
    
   $ch = curl_init();
$user="harsh_selani2000@yahoo.com:change";
$receipientno=$mobileno; 
$senderID="ACECHM"; 
$msgtxt="The activation code for the website is - Your Password is : ".$pass ; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);

echo "<font color='red'><h3>An e-mail and an sms has been sent to you regarding your password</h3>" ;

 echo "<h4>Go back to <a href='index.php'>home page</a></h4></font>" ;
}

else
{
  echo "<font color='red'><h2>Your answer seems to be wrong!!!!</h2><h4>Go back to<a href='forgotpass2.php'> step 2</a>&nbsp&nbspGo back to<a href='index.php'> home page</a></h4></font>" ;
}
$_SESSION["ans"]=NULL;
$_SESSION["pass"]=NULL;
 }
 else
 {
 echo "<font color='red'><h3>There seems to be a problem is password revival process</h3><h4><a href='forgotpass2.php'>Go back to step 2</a><a href='index.php.php'>Go back to home page</a></h4></font>" ;
 }
 $_SESSION["user"]=NULL;
?>
</font>
</body>
</html>