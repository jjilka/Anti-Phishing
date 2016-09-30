<?php
session_start();
//echo $_POST["amount"] ;
//echo $_POST["bank"] ;
//echo $_POST["otherbank"] ;
//echo $_POST["recacc"] ;
$_SESSION['message1']='';
$a=true ;
if($_POST["amount"]==""||!is_numeric( $_POST["amount"]))
{
$_SESSION['message1'].="Enter the amount you wish to transfer inproper digits<br />" ; 
$a=false;
}
if($_POST["bank"]=="g"&&$_POST["otherbank"]=="")
{
  $_SESSION['message1'].="Enter the name of some other bank <br />" ;
  $a=false;
}
if($_POST["recacc"]==""||strlen($_POST["recacc"])<8||!is_numeric( $_POST["recacc"]))
{
  $_SESSION['message1'].="Enter the receiver's account no. with atleast 8 digits <br />" ;
   $a=false;
}
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
$result = mysqli_query($con,"SELECT * FROM users WHERE username LIKE '$_SESSION[username]'");

while($row = mysqli_fetch_array($result))
  {
   $bal=$row["Balance"] ;
  }  
  /*if (!mysqli_query($con,$sql))
 {
  //die('Error: ' . mysqli_error($con));
  header("Location: failure.html") ;
  }*/
 $balleft=$bal-$_POST["amount"] ;// balance that would be left 
$_SESSION["balleft"]=$balleft ;
  if($_POST["amount"]>$bal)
  {
    $_SESSION['message1'].="You do not have this amount balanced in your account<br> Pls. Check the recent balance. <br />" ; 
	$a=false;
  }
  
  
      if($_POST["bank"]=="a")
	  {
	     $query="SELECT * FROM users where Account_no LIKE '$_POST[recacc]'";
if ($stmt = mysqli_prepare($con, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    //mysqli_stmt_num_rows($stmt));
	
	if(mysqli_stmt_num_rows($stmt)==0)
{
   //echo "Hello" ;
   $_SESSION['message1'].= "There exists no such account no. in Bank of Atharva. <br />";
   $a=false;

   //$_SESSION["addmoney"]=false;
   
   }
else
{
     $_SESSION["addmoney"]=true;
	 $_SESSION["accno"]=$_POST["recacc"];
	 $_SESSION["addamount"]=$_POST["amount"];
}
	  }
	  mysqli_stmt_close($stmt);
  }
  $_SESSION["addmoney"]=true;
  mysqli_close($con);
  $amount=$_POST["amount"];
  $recacc=$_POST["recacc"];
  if($a)
  {
    //echo "done" ;
  //$msg="Transfer details:<br>Amount : %d <br>Transfer to Account no. : %d <br>Balance that would be left in your account : ".$balleft."<br>Would you still like to transfer? <form action='transferfinal.php' method='POST'><input type='submit' value='submit'></form>";
  //$_SESSION['confirmation']=sprintf($msg, $amount, $recacc);
   $_SESSION['confirmation']="Transfer details:<br>Amount : ".$amount."<br>Transfer to Account no. :".$recacc."<br>Balance that would be left in your account : ".$balleft."<br>Would you still like to transfer? <form action='transferfinal.php' method='POST'><input type='submit' value='Yes'></form>";
   //echo $_SESSION['confirmation'] ;
  header("Location: account.php") ;
  }
  else
  {
    header("Location: account.php") ;  
  }
  
?>