<?php
	require_once 'connect_func.php';
	
	if(isset($_POST['email'])&&isset($_POST['password']))
	{
		if(!empty($_POST['email'])&&!empty($_POST['password']))
		{
		 $email=$_POST['email'];
		 $password=$_POST['password'];
		 $result=mysql_query("select * from members where email='$email' and password='$password'");
		  if(mysql_num_rows($result))
			{ 
			  session_start();
			  $id=mysql_result($result,0);
			  $_SESSION['id']=$id;
			 header("Location: index.php");
			}
		 else 
		 {
		       $data='Invalid Details';
			   header("Location: index.php?data=$data");
		 }
		 
		}
	    else 
		{
		    $data='Please enter all the fields';
			 header("Location: index.php?data=$data"); 
		}
	}
	
	


?>