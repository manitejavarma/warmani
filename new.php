<!DOCTYPE html>
<html>
<head>
<style>
#header {
    width: 824px;
    margin: 5px auto;
    text-align:left;
	border: 1px solid #cccccc;

}
#header ul {
padding:4px;
float:right;
}
#header ul li {
margin:0px 14px 0px 14px;
float:left;
list-style:none;
}
a{
text-decoration:none;
color:green;
}
</style>
</head>
<body>
<div id='header'>
<ul>
<li><a href='home.php' >Home</a></li>
<li><a href='profile.php'>Profile</a></li>
<li><a href='logout.php'>Logout</a></li>
</ul>
<image src='title.png'></image>
<div>
<div id='body'>
<?php 
 session_start();
 if(!isset($_SESSION['id']))
 { 
  header("Location: index.php");
 }
 require_once 'connect_func.php' ;
 $id=$_SESSION['id'];
 $result=mysql_query("select * from members where id='$id' ");
 $user=mysql_result($result,0,3);
 
 if (isset($_FILES['image']['name']))
{
    $saveto = "$id/$user.jpg";
    move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
    $typeok = TRUE;
    
    switch($_FILES['image']['type'])
    {
        case "image/gif":   $src = imagecreatefromgif($saveto); break;
        case "image/jpeg":  // Both regular and progressive jpegs
        case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
        case "image/png":   $src = imagecreatefrompng($saveto); break;
        default:            $typeok = FALSE; break;
    }
    
    if ($typeok)
    {
        list($w, $h) = getimagesize($saveto);

        $max = 100;
        $tw  = $w;
        $th  = $h;
        
        if ($w > $h && $max < $w)
        {
            $th = $max / $w * $h;
            $tw = $max;
        }
        elseif ($h > $w && $max < $h)
        {
            $tw = $max / $h * $w;
            $th = $max;
        }
        elseif ($max < $w)
        {
            $tw = $th = $max;
        }
        
        $tmp = imagecreatetruecolor($tw, $th);
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
        imageconvolution($tmp, array(array(-1, -1, -1),
            array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
        imagejpeg($tmp, $saveto);
        imagedestroy($tmp);
        imagedestroy($src);
    }
}
showProfile($id);
 
?>
<h1>choose ur profile pic</h1>
 <form method='post' action='' enctype='multipart/form-data'>

 <input type='file' name='image' size='14' maxlength='32' />
 <input type='submit' value='saveprofile' />
 </form><br><br><br><br>
</div>
<div></div>
</body>
</html>