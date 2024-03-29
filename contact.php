<?php

$yourname=$_POST['yourname'];
$emailaddress=$_POST['emailaddress'];
$message=$_POST['message'];


//database connection

$conn = new mysqli('localhost','root','','php_connect');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contact(yourname,emailaddress,message)values(?,?,?)");
    $stmt->bind_param("sss",$yourname,$emailaddress,$message);

    $stmt->execute();

    echo "successfully";
    $stmt->close();
    $conn->close();
}

?>
