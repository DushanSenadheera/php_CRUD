<?php

session_start();
require '../connection/connection.php';

$username = $_POST['fname'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where fname = '$username' && password = '$password'";
$result = $conn->query($sql);
$final = $result->fetch_assoc();

if ($final['fname'] == $username && $final['password'] == $password) {
    $_SESSION['username'] = $username;
    $_SESSION['userID'] = $final['userID'];
    header("Location: ../index.php");
} else{
    header("Location: ../login.php");
}

$conn->close();

?>