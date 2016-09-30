<html>
<head>
<title>Bank of Atharva</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style.css" rel="stylesheet" type="text/css">
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
          <tr>
                       <td width="21%"><h2 class="white-text"></h2></td>
             <td width="24%"></td>
          </tr>
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
            <td><h2 class="white-text">Providing world class Banking solutions</h2></td>
          </tr>
          <tr>
            <td>Bank of Atharva was founded in September 2013 by a group of students from Atharva college. The Bank was under private ownership and control till Jan 2014 when it was nationalised along with 13 other banks.

Beginning with one office in Mumbai, with a paid-up capital of Rs.50 lakh and 50 employees, the Bank has made a rapid growth over the years and blossomed into a mighty institution with a strong national presence and sizable international operations. In business volume, the Bank occupies a premier position among the nationalised banks. 

The Bank has 4545 branches in India spread over all states/ union territories including specialized branches. These branches are controlled through 50 Zonal Offices. There are 54 branches/ offices and 5 Subsidaries and 1 joint venture abroad.</td>
          </tr>
        </table></td>
        <td><img src="images/index_18.jpg" width="537" height="224" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="p2"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="33%" valign="top"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td><img src="images/index_21.gif" width="191" height="49" alt=""></td>
          </tr>
          <tr>
            <td class="p"><ul><li>Customer Service and Satisfaction</li>
 <li>Quality of service</li>
<li> Net Banking</li>
 <li>Opening of free demant accounts</li></ul></td>
          </tr>
          <tr>
            <td><a href="services.php"><img src="images/index_31.gif" alt="" width="83" height="26" border="0"></a></td>
          </tr>
        </table></td>
        <td width="1" valign="top" bgcolor="#3C4750"><img src="images/spacer.gif" width="1" height="1"></td>
        <td width="33%" valign="top"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td><img src="images/index_23.gif" width="155" height="46" alt=""></td>
          </tr>
          <tr>
            <td class="p"><ul><li>Shyam Shah</li><li>Jaikit Jilka</li><li>Yash Tare</li><li>Nirbhay Shah</li></ul></td>
          </tr>
          <tr>
            <td><a href="contact.php"><img src="images/index_31.gif" alt="" width="83" height="26" border="0"></a></td>
          </tr>
        </table></td>
       <td width="1" valign="top" bgcolor="#3C4750"><img src="images/spacer.gif" width="1" height="1"></td>
        <td width="34%" valign="top"><table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td><img src="images/index_25.gif" width="214" height="42" alt=""></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td><span class="blye-text-regular">15th Feb 2014</span><br>
Won best service award from India Today</td>
              </tr>
              <tr>
              <td bgcolor="#3C4750"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td><span class="blye-text-regular">3rd March 2014</span><br>stock price raised bt 20% </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><a href="#"><img src="images/index_31.gif" alt="" width="83" height="26" border="0"></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/index_34.gif" width="1000" height="59" alt=""></td></tr>
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