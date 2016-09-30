<html>

<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function displayBal(test){
  //alert("hey") ;
  //var capval = $('#entcaptcha').val();
  //alert(capval);
  $.ajax({
  //alert("hey") ;
 type: "POST",
 url: "displayBal.php",
 data: {letter: test}
 }).done(function(result) {
 $("#disbal").html(result);
 
 });
}
/*displayConfirmation(test){
  //alert("hey") ;
  var amount = $('#amount').val();
  var bank = $('#bank').val();
  var otherbank = $('#otherbank').val();
  var recacc= $('#recacc').val();
  //
  alert(amount);
  alert(bank);
  alert(otherbank);
  alert(recacc);
  $.ajax({
  //alert("hey") ;
 type: "POST",
 url: "transfer.php",
 data: {letter: test, amount: amount,bank: bank,otherbank: otherbank,recacc: recacc }
 }).done(function(result) {
 $("#discon").html(result);
 
 });
}*/
</script>
<!--<script type=text/javascript>
function validate1()
{
if(document.frm1.account.value=="" || document.frm1.account.value.length<16)
{
alert("Please enter a valid Account Number!")
return false;
}
if(document.frm1.transfer.value=="")
{
alert("Please enter the Amount to transfer.")
return false;
}
if(document.frm1.number.value=="" || document.frm1.number.value.length<16)
{alert("Please enter a valid Account Number!")
return false;
}
if(document.frm1.account.value== document.frm1.number.value)
{
alert("Invalid Transaction!")
return false;
}
}

</script>
-->

<title>Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body bgcolor="#29292b" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" alink="red" vlink="yellow">
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
        <td width="463" background="images/index_17.gif"><table width="100%" border="0" cellspacing="10" cellpadding="0" >
          <tr>
            <td><h2 class="white-text">&nbsp;&nbsp;&nbsp;Welcome to your personal Account</h2></td>
          </tr>
          <tr>
            <td><ul><li>Please be informed that you would be solely responsible for your monetory transfer here<br><br></li>
<li>No repudiation case shall be entertained<br><br></li>
<li>Be sure of the money transfer before you do it<br><br></li>
<li>If you fail to recieve the confirmation (via e-mail and sms) or wish to abort the transfer process please bring it to our notice (at the nearst branch or via <a href="contact.php">contact</a>) within 24 hrs. , after which no such request shall be entertained.<br><br></li>
</td>
          </tr>
        </table></td>
        <td><img src="images/index_18.jpg" width="537" height="224" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>

<p align="left">
<Pre><Span Style="position:absolute; top:470; left:60">
<table align="right" background="images/index_17.gif" height="250" width="250" border="0">
<tr>
<td>Account Detailes:</td> 
<td></td>
</tr>
<tr>
<td>Name:</td><td><?php echo $_SESSION["name"]." ".$_SESSION["surname"] ; ?></td>
</tr>
<tr>
<td>Account no. :</td><td><?php echo $_SESSION["acc_no"] ; ?></td>
</tr>
<tr>
<td>Credit card no. :</td><td><?php echo $_SESSION["credit_card_no"] ; ?></td>
</tr>
<tr>
<td>email-id :</td><td><?php echo $_SESSION["email_id"] ; ?></td>
</tr>
<tr>
<td>Mobile no. :</td><td><?php echo $_SESSION["mobile_no"] ; ?></td>
</tr>

</table></span><Pre><Pre><Span Style="position:absolute; top:490; left:310"><img src="images/line.jpg" align="right" height="250" width="50"></style></Pre>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
<form name="frm1" align="left" action="transfer.php" method="POST">
<table align="center">
<tr><td>Enter the Amount to be Transfer:-</td><td><input type="text" name="amount" id="amount" size="20"></td></tr>
<tr><td>Select the bank in which the account is present:-</td><td><select name="bank" id="bank">
<option value="a">Bank of Atharva</option>
<option value="b" selected>ICICI Bank</option>
<option value="c">HDFC Bank</option>
<option value="d">HSBC Bank</option>
<option value="e">Dena Bank</option>
<option value="f">Axis Bank</option>
<option value="g">others</option>
</select></td></tr>
<tr><td>If other bank, Please specify:-</td><td><input type="text" name="otherbank" id="otherbank" size="16"></td></tr>
<tr><td>Enter Reciever's Account Number:-</td><td><input type="text" name="recacc" id="recacc" size="16"></td></tr>
<tr><td><input type="submit" value="Transfer"></td><td></td></tr>
</table></form></td></tr><br>
</table>
<center>
<!--<button id='button3' name='button3'onclick='displayConfirmation()'>Transfer1</button>-->
<font color='red'>
<?php
if(isset($_SESSION['message1']))
echo $_SESSION['message1'] ;
echo "<br>" ;
$_SESSION['message1']='';

if(isset($_SESSION['confirmation']))
echo $_SESSION['confirmation'] ;
echo "<br>" ;
$_SESSION['confirmation']='';

if(isset($_SESSION["transfercomplete"]))
{
 echo "Transfer process is complete!" ;
 $_SESSION["transfercomplete"]=NULL;
}
?><br>
</font>
</center>
<Pre><Span Style="position:absolute; top:470; left:1000">
<table align="right" background="images/index_17.gif" height="250" width="200" border="0">

<tr>
<td align="center">Your current Balance is:</td> 
</tr>
<tr>
<td align="center"><button id="button2" name="button2" onclick='displayBal()'>Display Balance</button></td>
</tr>
<tr><td align="center"><div id="disbal"></div></td></tr>
<!--<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>>-->

</table></span></Pre><Pre><Span Style="position:absolute; top:490; left:945"><img src="images/line.jpg" align="right" height="250" width="50"></style></Pre>
</p>
<br><br>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> <td><br><!--<img src="images/index_20.gif" width="0" height="5">--><img src="images/index_34.gif" width="1000" height="59" alt=""></td></tr>
  <tr>
    <td height="102" bgcolor="#282828"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="696" height="102"><!--<img src="images/index_30.gif" width="400" height="0">--><img src="images/index_35.gif" width="696" height="102" alt="" align="center"></td>
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