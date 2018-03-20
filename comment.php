<?php
$name=$_POST['name'];
$email=$_POST['email'];
$url=$_POST['url'];
$comment=$_POST['comment'];

   $link= mysqli_connect('localhost','id3184723_egram','egram','id3184723_egram') or die(mysql_error());   
    $update="INSERT INTO commentsub(name,email,url,comment) VALUES('".$name."','".$email."','".$url."','".$comment."')";  
mysqli_query($link,$update) or die(mysql_error());	
echo 'Your Comment is Updated Successfully';
echo '<br><a href="feedback.html">Go Back To Previous Page</a>';
?>