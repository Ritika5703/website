<?php 
include "connection.php";

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$query=$_POST["query"];

$sql = "UPDATE `contact` SET `name` = '$name', `email` = '$email', `number` = '$number', `query` = '$query' WHERE `contact`.`id` = $id;";

if (mysqli_query($conn,$sql)) {
    header("location:contactmanage.php");
} else {
    echo "Something went wrong";
}

mysqli_close($conn);
?>