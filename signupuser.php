<?php
   
   include_once 'connect_func.php';			
         if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['password'])&&isset($_POST['email']))
         {
           if(!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['password'])&&!empty($_POST['email']))
           {
              $firstname=sanitize($_POST['firstname']);
              $lastname=sanitize($_POST['lastname']);
              $password=sanitize($_POST['password']);
              
              $email=sanitize($_POST['email']);
              $username=ucfirst($firstname)." ".$lastname;
              if(mysql_num_rows(mysql_query("SELECT * FROM members where email='$email'"))==0 )
              { send_mail($email);
                 $query=mysql_query("insert into members(first_name,last_name,password,username,email) values('$firstname','$lastname','$password','$username','$email')");
                 if(!$query) die("Sorry sign up not success full plz try again later");
				    
					$result=mysql_query("select * from members where email='$email'");
					$id=mysql_result($result,0);
					$_SESSION['id']=$id;					
header('Location: index.php');
              } 
              elseif(mysql_num_rows(mysql_query("SELECT * FROM members where email='$email'"))==1)  echo "<span style=\"color:navy;font-style:bold;font-family:verdana;font-size:1.3em;\" >Sorry,you may be already registered</span>" ;   
		   }
         }
?>