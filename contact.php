<?php 

include "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$query = $_POST["query"];

$sql = "INSERT INTO `contact` (`id`, `name`, `email`, `number`, `query`) VALUES (NULL, '$name', '$email', '$number', '$query');";

if (mysqli_query($conn,$sql)) {
    header("location:contactmanage.php");
} else {
    echo "failed" . mysqli_error($conn);
}

mysqli_close($conn);

?>




