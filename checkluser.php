<?php
  include_once 'connect_func.php';
  if(isset($_POST['email']))
  {
    $email=sanitize($_POST['email']);
    $result=mysql_query("SELECT * FROM members where email='$email'");

    if(mysql_num_rows($result))
    {
		$id=mysql_result($result,0,0);
		$user=mysql_result($result,0,3);
      	  if (file_exists("profile_pics/$id.jpg"))
            echo "<img src='profile_pics/$id.jpg' align='left' />";
		else echo"<img src='profile_pics/default.jpg' align='left' />";
		
		
		    }
	else echo 'New user?Please sign up.';
    
    

  }

?>