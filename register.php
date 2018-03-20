<!doctype html>  
<html>  
<head>  
<title>E-Panchayat Register</title>  
    <style>   
        body{  
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}</style>  
</head>  
<body>  
     
    <center><h1>E-Panchayat Registration Form</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
    <center><h2>Registration Form</h2></center>  
<form action="" method="POST">  
    <legend>  
    <fieldset>  
Aadhar No.: <input type="text" name="aadhar"><br />         
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />
Contact No.:<input type="text" name="contact"><br />
Age:<input type="text" name="age"><br />
Gender:<input type="text" name="gender"><br />   
<input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $aadhar=$_POST['aadhar'];
	$user=$_POST['user'];  
    $pass=$_POST['pass'];
	$contact=$_POST['contact'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	
    $con= mysqli_connect('localhost','id3184723_egram','egram','id3184723_egram') or die(mysql_error());   
  
    $query=mysqli_query($con,"SELECT * FROM members WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO members(aadhar,username,password,contact,age,gender) VALUES('$aadhar','$user','$pass','$contact','$age','$gender')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "Account Successfully Created";
	echo '<br><a href="index1.html">Click Here to Gain Full Access</a>';
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   