<?php
session_start() ;
//echo "<script type='text/javascript'>alert('hello hi');</script>" ;
$cap = $_REQUEST["letter2"];
//echo $cap;
if(isset($_SESSION["cap1"]))
				{
				$cap1=$_SESSION["cap1"];
				
				//echo $cap1;
				
	if($cap1==$cap)
	 {
	    echo "<form name='pass' action='finallogin.php' method='POST'><table align='center'><tr><td>Enter password</td><td><input type='password' name='pass' id='pass'></td></tr>";
		echo "<tr><td><a href='forgotpass.html'>Forgot your password?</a></td></tr><tr><td><input type='submit' value='submit'></td></tr></table></form>";		
	 }
	 else
	 {
	 echo "<script type='text/javascript'>alert('enter the correct CAPTCHA code');</script>";
	 }
	 }
	 
	 //$_SESSION["cap1"]=NULL;
?>