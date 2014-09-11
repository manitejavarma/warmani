<?php
	include_once 'connect_func.php';
	if($_POST['follow_status']=='follow')
		{		
				$email=sanitize($_POST['email']);
				$user_email=sanitize($_POST['user_email']);
				if(mysql_num_rows(mysql_query("select * from followers where email='$user_email' and following=$email"))!=1)
				{
				$result=mysql_query("insert into followers values('$user_email','$email')");
				}
				else "internal error occured";	
		}
	elseif($_POST['follow_status']=='following')
		{		
				$email=sanitize($_POST['email']);
				$user_email=sanitize($_POST['user_email']);
				mysql_query("delete from followers where email='$user_email' and following='$email'");
				
		}
		$x=$_SERVER['HTTP_REFERER'];
	header("Location: $x");


?>