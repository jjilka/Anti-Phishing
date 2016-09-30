<?php
session_start();
//echo "hello";
if(isset($_SESSION["cap1"]))
{
$_SESSION["cap1"]=NULL;
}
if(isset($_SESSION["pass"]))
{
if($_POST["pass"]==$_SESSION["pass"])
{
  $_SESSION["logincomplete"]=1;
  header("Location: index.php");
}
else
{
   $_SESSION["incorrectpass"]=1;
   header("Location: Login.php") ;
}
}
?>