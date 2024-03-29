<?php

$yourname=$_POST['yourname'];
$emailaddress=$_POST['emailaddress'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$cars=$_POST['cars'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];



//database connection

$conn = new mysqli('localhost','root','','php_connect');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into admission(yourname,emailaddress,phone,gender,dob,cars,password,confirmpassword)values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssisssss",$yourname,$emailaddress,$phone,$gender,$dob,$cars,$password,$confirmpassword);

    $stmt->execute();

    echo "successfully";
    $stmt->close();
    $conn->close();
}

?>
