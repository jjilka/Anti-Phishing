<?php
    session_start() ;
	//echo "Working 1" ;
	$cap=$_REQUEST["letter"];
	$uid=$_REQUEST["name"];
	$_SESSION["username"]=$uid;
	//echo $_REQUEST["letter1"];
	//echo "Working 2" ;
	//echo $cap ;
	//echo $uid ;
	//echo "Working 3" ;
	$con=mysqli_connect("localhost","knowportal_bk","qwerty","knowportal_bk1");
// Check connection

//$_SESSION['d']=NULL ; // this is the null Session variable which

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
	$result = mysqli_query($con,"SELECT * FROM users where username='$uid'");

while($row = mysqli_fetch_array($result))
  {
   $share1=$row["share1"] ;
   $share2=$row["share2"] ;
   $captcha=$row["Captcha"] ;
    $_SESSION["pass"]=$row["password"];	
	
	$_SESSION["name"]=$row["name"] ;
	$_SESSION["surname"]=$row["surname"] ;
	$_SESSION["acc_no"]=$row["Account_no"] ;
	$_SESSION["credit_card_no"]=$row["credit_card_no"] ;
	$_SESSION["email_id"]=$row["email_id"] ;
	$_SESSION["mobile_no"]=$row["mobile_no"] ;
  }
  //echo $share1 ;
  //echo $share2 ;
  //echo $captcha ;
  
   if($cap==$share1)
   {
      //echo "Hi 123454" ;
	   $_SESSION["cap"]=$captcha ;
	   $_SESSION["cap1"]=$captcha ;
	  echo "<br>" ;
	  echo "<table align='center'><tr><td>" ;
echo "<img id='siimage' style='border: 1px solid #000; margin-right: 15px' src='./securimage_show.php?sid=<?php echo md5(uniqid()) ?>' alt='CAPTCHA Image' align='left'></td>" ;
echo "<td><object type='application/x-shockwave-flash' data='./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php' height='32' width='32'>
    <param name='movie' value='./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php' />
    </object></td></tr></table>" ;
echo "<form name='captcha'><table align='center'><tr><td><font color='white'>Enter the above CAPTCHA</font></td><td><input type=text id='entcaptcha' name='entcaptcha'></td></tr></table></form>" ;
echo "<table align='center'><tr><td><button id='button1' name='button1'onclick='displayPass()'>Submit CAPTCHA</button></td></tr></table>";
//$_SESSION['d']=1 ;
	}
   else 
   {
   echo "<br>" ;
    echo "<table align='center'><tr><td>" ;
echo "<img id='siimage' style='border: 1px solid #000; margin-right: 15px' src='./securimage_show.php?sid=<?php echo md5(uniqid()) ?>' alt='CAPTCHA Image' align='left'></td>" ;
echo "<td><object type='application/x-shockwave-flash' data='./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php' height='32' width='32'>
    <param name='movie' value='./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php' />
    </object></td></tr></table>" ;
//echo "<button id='button1' name='button1' onClick='signin.php.href="?button1=1"'>Send CAPTCHA</button><br>" ;
echo "<br>" ;
   }   
   
   mysqli_close($con);
?>
