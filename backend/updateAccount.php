<?php

session_start();
$name = $_SESSION['username'];
$id = $_SESSION['userID'];

require '../connection/connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql = "UPDATE user SET lname='$lname' WHERE userID='$id'";

if (mysqli_query($conn, $sql)) {
  header("Location: ../index.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>