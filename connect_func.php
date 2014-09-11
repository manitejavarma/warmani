<?php
$db_hostname='mysql.hostinger.in';
$db_username='u969003719_mani';
$db_password='varma8824';
$db_database='u969003719_mani';
mysql_connect($db_hostname,$db_username,$db_password)  or die(mysql_error());

mysql_select_db($db_database) or die(mysql_error());

function sanitize($var)
{
 $var=strip_tags($var);
 $var=htmlentities($var);
 $var=stripslashes($var);
 return mysql_real_escape_string($var);
 
}
function send_mail($email)
{
						$to = "$email";
						$subject = 'Thanking you';
						$message = "Thank you for visiting www.mad-man.esy.es \n please click on below link to confirm your identification  ";	
						$header = "From: mad-man";
						$mail_sent = mail($to, $subject, $message, $header);
}
function showProfile($id)
{    
		$result=mysql_query("select * from members where id='$id' ");
		$user=mysql_result($result,0,3);
		if (file_exists("profile_pics/$id.jpg"))
            echo "<img src='profile_pics/$id.jpg' align='left' />";
		else echo"<img src='profile_pics/default.jpg' style='width:30px;height:30px;' align='left' />";
}
function data_uri($file, $mime) 
{	  
			$contents = file_get_contents($file);
			$base64   = base64_encode($contents); 
			return ('data:' . $mime . ';base64,' . $base64);
}
?>
