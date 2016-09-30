<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
//$('#dis1').hide();

function displayPass(test){
  //alert("hey") ;
  var capval = $('#entcaptcha').val();
  //alert(capval);
  $.ajax({
  //alert("hey") ;
 type: "POST",
 url: "displaypass.php",
 data: {letter2: capval}
 }).done(function( result1 ) {
 //$("#dis").html(test);
 $("#dis2").html(result1);
 //$("#dis1").show();
 });
 /*var username1 = $('#username').val();
 var capshare1 = $('#capshare').val();
 $.ajax({
 type: "POST",
 url: "signin4.php",
 data: {letter:test,name: username1,letter1: capshare1}
 }).done(function( result ) {
 //$("#dis").html(test);
 $("#dis2").html(result);
 //$("#dis1").show();
 });*/
 //$("p").hide();
}
/*
$('.button').click(function() {
alert("hello hi bye");

 $.ajax({
  type: "POST",
  url: "some.php",
  data: { name: "John" }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});    

    });*/

function keyListen(test){
 
 var username = $('#username').val();
 var capshare = $('#capshare').val();
 
 $.ajax({
 type: "POST",
 url: "signin4.php",
 data: {letter:test,name: username,letter1: capshare}
 }).done(function( result ) {
 //$("#dis").html(test);
 $("#dis").html(result);
 //$("#dis1").show();
 });
}
</script>
</head>

<body bgcolor="#29292b" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#29292b"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="57%"><img src="images/index_01.jpg" width="573" height="134" alt=""></td>
        <td width="43%"><table width="100%" border="0" cellspacing="10" cellpadding="0">
           </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/index_11.gif" width="434" height="41" alt=""></td>
        <td><a href="index.php"><img src="images/index_12.jpg" alt="" width="101" height="41" border="0"></a></td>
        <td><a href="services.php"><img src="images/index_13.jpg" alt="" width="102" height="41" border="0"></a></td>
        <td><a href="register.php"><img src="images/index_14.jpg" alt="" width="102" height="41" border="0"></a></td>
        <td><a href="contact.php"><img src="images/index_15.jpg" alt="" width="102" height="41" border="0"></a></td>
       <td>
	   <?php
	   if(isset($_SESSION["logincomplete"]))
		 {
		 echo "<td><a href='account.php'><img src='images/account_img.jpg' alt='' width='102' height='41' border='0'></a></td>" ;
		}
		?>
		</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="463" background="images/index_17.gif"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td><h2 class="white-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</h2></td>
          </tr>
         
        </table></td>
        <td><img src="images/index_18.jpg" width="537" height="224" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
<font color='red'>
<?php
session_start();
if(isset($_SESSION["incorrectpass"]))
{
   echo "incorrect password!";
   $_SESSION["incorrectpass"]=NULL;
}
?>
</font>
<form name="f2" align="center"><br><br>
<table align="center">
<tr><td>username</td><td><input type="text" id="username" name="username"><br><br></td></tr>
<tr><td>Enter your CAPTCHA share</td><td><input type="text" name="capshare" id="capshare" onkeyup="keyListen(this.value)"><br></td></tr>
</table>
</form>
<div id="dis">
<!--<h1><font color="white">Hello!</font></h1>-->
</div>
<div id="dis2">
</div>
<!--<p><font color="white">Hello</font></p>-->
<!--<div id="dis1">
<input type='button' name='button1' value='Submit CAPTCHA'>
		</div>-->
<!--<button id='button1' name='button1'> <!--onClick='signin.php.href="?button1=1"'->Get captcha</button><br>-->
<!--
 
 

// dirname(__FILE__) . '/securimage.php';
//require_once dirname(__FILE__) . '/signin2.php';
   session_start();
//echo "<button id='button1' name='button1' onClick='signin.php.href="?button1=1"'>Get captcha</button><br>" ;
    
 
-->



 </td></tr>
<tr> <td><br><img src="images/index_34.gif" width="1000" height="59" alt=""></td></tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="102" bgcolor="#282828"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="696" height="102"><img src="images/index_35.gif" width="696" height="102" alt=""></td>
        <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td>Copyright &copy; ACE. All rights reserved. 
Design by ACE TECH</td>
          </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>