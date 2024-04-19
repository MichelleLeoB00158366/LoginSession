<?php


$Username = "Steve";
$Password = "pass";


$DBHost = "localhost";
$DBUser = "user";
$DBPass = "password";
$DBName = "name";


$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

