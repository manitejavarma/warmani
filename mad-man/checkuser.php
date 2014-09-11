<?php
  include_once 'connect_func.php';
  if(isset($_POST['email']))
  {
    $email=sanitize($_POST['email']);
    $result=mysql_query("SELECT * FROM members where email='$email'");

    if(mysql_num_rows($result))
    {
      echo 'Email already exists';
    }
	else echo '';
    
    

  }




?>