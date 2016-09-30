<html>
<head>
<title>Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style.css" rel="stylesheet" type="text/css"><!--<script type="text/javascript" src="validate.js"></script>-->

</head>
<body bgcolor="#29292b" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#29292b"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="57%"><img src="images/index_01.jpg" width="573" height="134" alt=""></td>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
session_start();
if(!isset($_SESSION["logincomplete"]))
{    
    echo "<a href='Login.php'><font size=3px color='white'>Login</font></a>" ;
	}
else
{
   echo "<font size=3px color='white'>hi&nbsp;".$_SESSION["username"]."</font>&nbsp;&nbsp;&nbsp;<a href='signout.php'><font size=3px color='white'>Sign out</font></a>" ;
	//$_SESSION["logincomplete"]=NULL;
}
?>
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
            <td><h2 class="white-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Form</h2></td>
          </tr>
              </table></td>
        <td><img src="images/index_18.jpg" width="537" height="224" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>
<form color="White" name="StudentRegistration" action="validatedb.php" method="post" >
<br>
<font color='red'>
<?php

//session_start();
if(isset($_SESSION['message']))
echo $_SESSION['message'];
$_SESSION['message']='';

if(isset($_SESSION["wrongcaptcha"]))
{
  echo "Enter the correct CAPTCHA";
  $_SESSION["wrongcaptcha"]=NULL;
}
if(isset($_SESSION["usernameunava"]))
{
  echo $_SESSION["usernameunava"] ;
  $_SESSION["usernameunava"]=NULL ;
}

?>
</font>
<table align="center">


<tr>
<td>Name<font color="red">*</font></td>
<td><input type=text name="name" id="name" value="" size="30"></td><!--parameter name-->
</tr>

<tr>
<td>Surname<font color="red">*</font></td>
<td><input type="text" name="surname" id="surname" value="" size="30"></td><!--parameter surname-->
</tr>

<tr>
<td>Username<font color="red">*</font></td>
<td><input type=text name="username" id="username" value="" size="30"></td><!--parameter username-->
</tr>

<tr>
<td>Password<font color="red">*</font></td>
<td><input type=Password name="password" id="password" value="" size="30"></td><!--parameter password-->
</tr>

<tr>
<td>Confirm Password<font color="red">*</font></td>
<td><input type=Password name="chkass" value="" id="chkass" size="30"></td>
</tr>

<tr>
<td>Sex<font color="red">*</font></td>
<td><input type="radio" name="gender" id="gender" value="male" size="10" checked>Male<!--parameter gender-->
<input type="radio" name="gender" id="gender" value="Female" size="10">Female</td><!--parameter gender-->
</tr>

<tr>
<td>Personal Address<font color="red">*</font></td>
<td><textarea name="feedback" id="feedback" rows=4 columns=20></textarea></td><!--parameter feedback-->

</tr>


<!--
<tr>
<td>City</td>
<td><input type="text" value="Mumbai" name="city" id="city">
</td>
</tr>

<tr>
<td>Account Number:</td><td><input type="text" value="123456789" size=15 name="account" id="account"></td>
</tr>

<tr><td>Credit Card no:</td><td><input type=text value="1456789" size=15 name="credit" id="credit">
</td>

</tr>
-->

<tr>
<td>PinCode<font color="red">*</font></td>
<td><input type="text" name="pincode" value="" id="pincode" size="30"></td>

</tr>
<tr>
<td>EmailId<font color="red">*</font></td>
<td><input type="text" name="email" value="" id="email" size="30"></td><!--parameter email to be sent. not sent to 4.php yet-->
</tr>

<tr>
<td>DOB<font color="red">*</font></td>
<td><input type="date" name="dob" id="dob" size="10"></td>
</tr>

<tr>
<td>MobileNo<font color="red">*</font></td>
<td><input type="text" name="mobileno" id="mobileno" size="10"></td>
</tr>

<tr>
<td>Select a security question<font color="red">*</font></td>
<td><select name="question" id="question">
<option value="a">What is the name of your first uncle?</option>
<option value="b" selected>What was the name of your teacher in kindergarden?</option>
<option value="c">Your best friend's name is...</option>
<option value="d">Your alma matter is...</option>
</select><br></td>
</tr>

<tr>
<td>Answer<font color="red">*</font></td>
<td><input type="text" name="answer" value="" id="answer" size="10"></td>
</tr>

<tr>
<td>

    <img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="./securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
    </td>
	<td>
	<object type="application/x-shockwave-flash" data="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio.png&amp;audio_file=./securimage_play.php" height="32" width="32">
    <param name="movie" value="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio.png&amp;audio_file=./securimage_play.php" />
    </object>
    &nbsp;
    <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="./images/refresh.png" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a><br />

	<strong>Enter Code<font color="red">*</font>:</strong><br>
    <input type="text" id="ct_captcha" name="ct_captcha" size="12" maxlength="16" /><!--parameter ct_captcha-->
</td>

</tr>
<tr>
<td>
<input type="submit" value="submit">
<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="javascript:validate()">check</button>-->


<input type="reset"></td>

</tr>

</table>


</form>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
 
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