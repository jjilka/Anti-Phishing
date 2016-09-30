 
<?php
session_start() ;
/*
echo '<script type="text/javascript">'
   , 'validate();'
   , '</script>';
*/
if($_POST[ct_captcha]==$_SESSION['capcode'])
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
$a ;   
if($_POST[gender]=="female")
   {
    $a="female" ;	 
   }   
else
    {
	$a="male" ;  
	}  
/*$b ;
if($_POST[field]=="inft")
    {
	$b="inft" ;
	}	
elseif($_POST[field]=="extc")
    {
    $b="extc" ;  
	}
elseif($_POST[field]=="elex")
     {
	 $b="elex" ;
	 }	
else
     {
	 $b="cmpn" ;
	 }	 

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
$result = mysqli_query($con,"SELECT max(id) As id FROM users");

while($row = mysqli_fetch_array($result))
  {
   $z=$row['id'] ;
  }
  $z++ ;
  //echo $z ;
  $m = $_POST[ct_captcha] ;
  $m1 = substr( $m , 0 , 3 );
  $m2 = substr( $m , 3 , 3 );
 
$sql="INSERT INTO users
VALUES
('$_POST[name]','$_POST[surname]','$_POST[username]','$_POST[password]','$a','$_POST[feedback]',$z,'$_POST[ct_captcha]','$m1','$m2')" ;


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
   header("Location: success.html") ;
} 
//echo "1 record added";

mysqli_close($con);
$_SESSION['capcode']=NULL ;
}
else
{
header("Location: failure.html") ;
}
?>
