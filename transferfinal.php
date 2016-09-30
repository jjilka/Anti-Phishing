<?php
//echo "transfered" ;
session_start();
if(isset($_SESSION["balleft"]))
{
$con=mysqli_connect("localhost","knowportal_bk","qwerty","knowportal_bk1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
   {
   echo "Connected to the SQL server" ; 
   }
$result = mysqli_query($con,"UPDATE users
SET Balance='$_SESSION[balleft]'
WHERE username='$_SESSION[username]'");

/*if (!mysqli_query($con,$sql))
 {
  //die('Error: ' . mysqli_error($con));
  header("Location: failure.html") ;
  }*/



if($_SESSION["addmoney"])
{
  $result1 = mysqli_query($con,"SELECT * FROM users WHERE Account_no LIKE '$_SESSION[accno]'");
  while($row = mysqli_fetch_array($result1))
  {
   $recbal=$row["Balance"] ;
  }  
  /*if (!mysqli_query($con,$sql))
 {
  //die('Error: ' . mysqli_error($con));
  header("Location: failure.html") ;
  }*/
  $setbal=$recbal+$_SESSION["addamount"];
  
  $result2 = mysqli_query($con,"UPDATE users
SET Balance=$setbal
WHERE Account_no='$_SESSION[accno]'");


/*if (!mysqli_query($con,$sql))
 {
  //die('Error: ' . mysqli_error($con));
  header("Location: failure.html") ;
  }*/
  
  $_SESSION["addmoney"]=NULL;
	 $_SESSION["accno"]=NULL;
	 
}

$_SESSION["transfercomplete"]=1;
mysqli_close($con);


/*	 
	 $message="Amount".$_SESSION["addamount"]."/- is successfully transfered. Your present balance now is ".$_SESSION["balleft"] ;
	 $to=$_POST["email"] ;
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
*/
/*
/ You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();

 end alternate code/
*/
/*
  // Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Confirmation Mail')
  ->setFrom(array('bankofatharva@gmail.com' => 'Bank of Atharva'))
  ->setTo(array($to))
  ->setBody($message)
  ;

// Send the message
$result = $mailer->send($message);
//mail($to,$subject,$message,'From: harsh@yahoo.com');   
 */
$ch = curl_init();
$user="harsh_selani2000@yahoo.com:change";
$receipientno=$_SESSION["mobile_no"]; 
$senderID="ACECHM"; 
$msgtxt="The activation code for the website is - Amount".$_SESSION["addamount"]."/- is successfully transfered. Your present balance now is ".$_SESSION["balleft"] ; 
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
$_SESSION["addamount"]=NULL;
$_SESSION["balleft"]=NULL;

header("Location: account.php") ;
}
else
{
echo "There seems to be a problem in transfering money" ;
}  
?>