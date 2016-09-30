<?php
 session_start();
 $_SESSION['message']='';
 $a=true;
   if($_POST["name"]=="")
   {
     $_SESSION['message'].= "Please provide your Name! <br />";
	 
    $a=false;
    
   }
   if($_POST["surname"]== "")
   {
     $_SESSION['message'].= "Please provide your surname! <br />";
    $a=false; 
     //return false;
   }
    if($_POST["username"]== "")
   {
    $_SESSION['message'].= "Please provide a username! <br />";
	// echo "<script type='text/javascript'>alert( 'Please provide your userame!' )</script>";
     $a=false;
     //return false;
   }
 if($_POST["password"]== "" || strlen($_POST["password"])<6)
   {
   $_SESSION['message'].= "Please provide a password with atleast 6 chracters! <br />";
    // echo "<script type='text/javascript'>alert( 'Please provide a password with atleast 6 characters' )</script>";
    $a=false;
     //return false;
   }
//var pass=document.StudentRegistration.password.value;
 if($_POST["chkass"]== "" || $_POST["chkass"] != $_POST["password"])
   {
   $_SESSION['message'].= "Please conform your password! <br />";
     //echo "<script type='text/javascript'>alert( 'Please conform your password!' )</script>";
     $a=false;
     //return false;
   }

  
   if($_POST["feedback"]== "")
   {
   $_SESSION['message'].= "Please provide your personal address! <br />";
    // echo "<script type='text/javascript'>alert( 'Please provide your personel address' )</script>";
    $a=false;
     //return false;
   }
 /*    
 if( $_POST["city"] == "" )
   {
     $_SESSION['message'].= "Please provide your city name! <br />";
	 //echo "<script type='text/javascript'>alert( 'Please provide your city name!' )</script>";
    $a=false;
     //return false;
   }   
    
   if( document.StudentRegistration.District.value == "-1" )
   {
     alert( "Please provide your Select District!" );
    $a=false;
     //return false;
   }   
   if( document.StudentRegistration.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     $a=false;
     //return false;
   }*/
   if( $_POST["pincode"] == "" ||
           !is_numeric( $_POST["pincode"]) ||
           strlen($_POST["pincode"]) != 6 )
   {
   $_SESSION['message'].= "Please provide a pincode with 6 digits! <br />";
    // echo "<script type='text/javascript'>alert( 'Please provide a pincode!' )</script>";
    $a=false;
     //return false;
   }

 //$email = document.StudentRegistration.email.value;
  $atpos = strpos($_POST["email"],"@");
  $dotpos = strrpos($_POST["email"],".");
 if ($_POST["email"]=="" ||$atpos < 1||( $dotpos - $atpos < 2 )) 
 {
 $_SESSION['message'].= "Please provide a correct email-id ! <br />";
     //alert("Please enter correct email ID")
    $a=false;
     //return false;
 }
  if( $_POST["dob"] == "" )
   {
   $_SESSION['message'].= "Please provide your date of birth! <br />";
   //  echo "<script type='text/javascript'>alert( 'Please provide your Date of birth!' )</script>";
     $a=false;
     //return false;
   }
  if( $_POST["mobileno"] == "" ||
           !is_numeric( $_POST["mobileno"]) ||
           strlen($_POST["mobileno"]) != 10 )
   {
   $_SESSION['message'].= "Please provide a correct mobile number with 10 digits! <br />";
    // echo "<script type='text/javascript'>alert( 'Please provide a correct mobile number ' )</script>";
     $a=false;
     //return false;
   }
   if( $_POST["answer"] == "" )
   {
   $_SESSION['message'].= "Please choose a security question and give an answer to it! <br />";
   //  echo "<script type='text/javascript'>alert( 'Please provide your Date of birth!' )</script>";
     $a=false;
     //return false;
   }
   if($a)
   {
   // write code to enter data in db here
   if($_POST["ct_captcha"]==$_SESSION['capcode'])
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
$g ;   
if($_POST["gender"]=="female")
   {
    $g="female" ;	 
   }   
else
    {
	$g="male" ;  
	}  
$b ;
if($_POST["question"]=="a")
    {
	$b="What is the name of your first uncle?" ;
	}	
elseif($_POST["question"]=="b")
    {
    $b="What was the name of your teacher in kindergarden?" ;  
	}
elseif($_POST["question"]=="c")
     {
	 $b="Your best friend's name is..." ;
	 }	
else
     {
	 $b="Your alma matter is..." ;
	 }	 
/*
	 $C ;

	 if($_POST[swim]=="swim")
$c="yes" ;
else
$c="no" ;

$d ;
 if($_POST[dance]=="dance")
    $d="true" ;
else
$d="false" ;
$e ;
 if($_POST[read]=="read")
    $e="true" ;
else
$e="false" ;
$f ;
 if($_POST[play]=="play")
    $f="true" ;
else
$f="false" ;

*/
//$usercheck=$_POST[username];
//echo $usercheck;
/*
$result1= mysqli_query($con,"SELECT * FROM users where username LIKE '$_POST[username]'");
*/
$query="SELECT * FROM users where username LIKE '$_POST[username]'";
if ($stmt = mysqli_prepare($con, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    //mysqli_stmt_num_rows($stmt));
	
	if(mysqli_stmt_num_rows($stmt)!=0)
{
   //echo "Hello" ;
   $_SESSION["usernameunava"]= "This username is not available. <br />";
   header("Location: register.php") ;
}

    /* close statement */
    
/*mysqli_stmt_store_result($result1);
//echo $result1 ;
if(mysqli_stmt_num_rows($result1)!=0)
{
   echo "Hello" ;
   $_SESSION['message'].= "This username is not available. <br />";
}*/

/*while($row = mysqli_fetch_array($result1))
  {
   $userarray=$row["username"];
   $passarray=$row["password"];
  }
  if(in_array($_POST["username"],$userarray))
  {
    echo "<script type='text/javascript'>alert('username not available');</script>" ;
  }*/
else 
  {  
$result = mysqli_query($con,"SELECT max(Account_no) As Account_no FROM users");

while($row = mysqli_fetch_array($result))
  {
   $z=$row['Account_no'] ;
  }
  $z++ ;
  
  $result1 = mysqli_query($con,"SELECT max(credit_card_no) As credit_card_no FROM users");

while($row = mysqli_fetch_array($result1))
  {
   $y=$row['credit_card_no'] ;
  }
  $y++ ;
  //echo $z ;
  $m = $_POST["ct_captcha"] ;
  $m1 = substr( $m , 0 , 3 );
  $m2 = substr( $m , 3 , 3 );
 
$sql="INSERT INTO users
VALUES
('$_POST[name]','$_POST[surname]','$_POST[username]','$_POST[password]','$g','$_POST[feedback]',$z,'$_POST[ct_captcha]','$m1','$m2',1000000,'$b','$_POST[answer]',$y,'$_POST[mobileno]','$_POST[email]')" ;


if (!mysqli_query($con,$sql))
  {
  //die('Error: ' . mysqli_error($con));
  header("Location: failure.html") ;
  }
 else
{    /*
     $from = "icuci bank" ;
	 $subject="Security mail from our bank" ;
	 $message="Thank you for choosing our bank" ;
	 $to=$_POST["email"] ;
	 echo $to ;
	 mail($to,$subject,$message);*/  

//$from = "icuci bank" ;
	 //$subject="Security mail from our bank" ;
	 
/*	 
	 
	 $message="Thank you for choosing Bank of Atharva.  Your CAPTCHA is: ".$m.". The user's share would be: ".$m1." Your Account no. would be: ".$z." while your credit card no. will be:".$y ;
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
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/
/*
// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Confirmation Mail')
  ->setFrom(array('yashtare1992@gmail.com' => 'Bank of Atharva'))
  ->setTo(array($to))
  ->setBody($message)
  ;

// Send the message
$result = $mailer->send($message);
//mail($to,$subject,$message,'From: harsh@yahoo.com');   
*/
$ch = curl_init();
$user="harsh_selani2000@yahoo.com:change";
$receipientno=$_POST["mobileno"]; 
$senderID="ACECHM"; 
$msgtxt="The activation code for the website is - Welcome to Atharva. Your CAPTCHA is: ".$m.". Your share is: ".$m1." Your Account no. would be: ".$z ; 
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
	
   //echo "Hi" ;
   header("Location: success.html") ;
} 
//echo "1 record added";
}
mysqli_close($con);
$_SESSION['capcode']=NULL ;
}
mysqli_stmt_close($stmt);
}
else
{
$_SESSION["wrongcaptcha"]=1;
header("Location: register.php") ;
}
   //header("Location: success.html") ;
   }
   else
   {
   
   header("Location: register.php") ;
   }

?>