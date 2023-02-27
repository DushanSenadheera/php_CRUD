<?php

session_start();
$name = $_SESSION['username'];
$id = $_SESSION['userID'];

require '../connection/connection.php';

$password = $_POST['password'];

$sql = "DELETE FROM user WHERE userID='$id' and password='$password'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../login.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>