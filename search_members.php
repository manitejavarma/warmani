			<?php
			require_once "connect_func.php";
			$search=$_REQUEST['search'];
			$result=mysql_query("select * from members where username like '$search%'");			
			
			$num=mysql_num_rows($result);
			
			
			for($j=0;$j<$num;$j++)
			{
				$row=mysql_fetch_row($result);
			
				if(file_exists("profile_pics/$row[0].jpg"))
			{echo "<a href='profile.php?id=$row[0]'><img src='profile_pics/$row[0].jpg'  style='width:30px;height:30px;' 				></img>$row[3]<br></a>";}
			else echo  "<a href='profile.php?id=$row[0]'><img src='profile_pics/default.jpg'    
			style='width:30px;height:30px;'  ></img>$row[3]<br></a>";
 
			}
			

			?>
