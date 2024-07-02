<?php 


include "connection.php";


$uname = $_POST["uname"];
$pass = $_POST["pass"];


$sql = "SELECT * FROM `user` WHERE `username` = '$uname' and `password` = '$pass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    header("location:index.html");
} else {
   echo "Invalid Credentials <a href='index.html'>try again</a>";
}

mysqli_close($conn);

?>