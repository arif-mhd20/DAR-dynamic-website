<?php

// $con = mysqli_connect('localhost', 'root');

// mysqli_select_db($con , "dynamicwebsitephpproject03");

// $user = $_POST['user'];
// $email = $_POST['email'];
// $message = $_POST['message'];


// $query = "INSERT INTO `userinfo`(`user`, `email`, `message`) VALUES('$user','$email','$message')";

// mysqli_query($con , $query);
// echo "Message Is Sent";




// $connection = mysqli_connect('localhost', 'root');

// mysqli_select_db($connection,"dynamicwebsitephpproject03");

// $user = $_POST['user'];
// $email = $_POST['email'];
// $message = $_POST['message'];

// $query = "INSERT INTO `userinfo`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

// mysqli_query($connection,$query);

// echo "MESSAGE IS SENT";


$con = mysqli_connect('localhost' , 'root');

if($con){
    echo "connection successful<br>";
    echo "Your message it sent successfully";
}else{
    echo "connection Failed";
}

mysqli_select_db($con , 'dynamicwebsitephpproject03');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO userinfo (name, email, message) VALUES('$name', '$email', '$message')";

mysqli_query($con , $query);

