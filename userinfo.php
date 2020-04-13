<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo"connection successfull";
}else{
	echo"No connection";
}

mysqli_select_db($con,'websiteuserdata');

$user=$_POST['user'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$comments=$_POST['comments'];

$query="insert into userinfodata(user,email,mobile,comment)
values('$user','$email','$mobile','$comments')";
echo"$query";
mysqli_query($con,$query);
?>