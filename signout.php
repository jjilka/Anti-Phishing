<?php
session_start();
$_SESSION["logincomplete"]=NULL;
$_SESSION["pass"]=NULL;
$_SESSION["username"]=NULL;
$_SESSION["name"]=NULL ;
	$_SESSION["surname"]=NULL ;
	$_SESSION["acc_no"]=NULL ;
	$_SESSION["credit_card_no"]=NULL ;
	$_SESSION["email_id"]=NULL ;
	$_SESSION["mobile_no"]=NULL ;
header("Location: index.php");
?>