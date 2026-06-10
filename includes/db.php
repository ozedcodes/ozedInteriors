<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ozedinteriors";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){
    die("Connection Error: " . mysqli_connect_error());
}

?>