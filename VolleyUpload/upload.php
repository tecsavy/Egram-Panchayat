<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
                $name = $_POST['name'];
 
 require_once('dbConnect.php');
 
 $sql ="SELECT id FROM volleyupload ORDER BY id ASC";
 
 $res = mysqli_query($conn,$sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
 $path = "uploads/$id.png";
 
 $actualpath = "https://egram.000webhostapp.com/VolleyUpload/upload.php";
 
 $sql = "INSERT INTO volleyupload (photo,name) VALUES ('$actualpath','$name')";
 
 if(mysqli_query($conn,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
 
 mysqli_close($conn);
 }else{
 echo "Error";
 }