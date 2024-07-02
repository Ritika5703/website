<?php 

include "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$uname = $_POST["uname"];
$pass = $_POST["pass"];


$sql = "INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`) 
        VALUES (NULL, '$name', '$email', '$uname', '$pass');";


if (mysqli_query($conn,$sql)) {
    header("location:login.html");
} else {
    echo "failed" . mysqli_error($conn);
}

mysqli_close($conn);


?>