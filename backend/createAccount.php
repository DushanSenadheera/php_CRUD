<?php

require '../connection/connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];

$sql = "INSERT INTO user (fname, lname, password)
VALUES ('$fname', '$lname', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
