<?php

    $name = $_SESSION['username'];

    require 'connection/connection.php';

    $sql = "SELECT fname, lname FROM user where fname = '$name'";
    $result = $conn->query($sql);
    $final = $result->fetch_assoc();

    $fname = $final['fname'];
    $lname = $final['lname'];

    $conn->close();

    ?>