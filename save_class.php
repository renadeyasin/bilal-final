<?php
	include('dbcon.php');
	include('session.php');
$class_name = $_POST['class_name'];
$category = $_POST['category'];
$fee = $_POST['fee'];

mysqli_query($conn,"insert into class (class_name,category,fee) values('$class_name','$category','$fee')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error());
?>