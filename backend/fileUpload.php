<?php

    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        // Check for errors
        if ($file['error'] > 0) {
            echo "Error: " . $file['error'];
        } else {
            // Get the file information
            $name = $file['name'];
            $type = $file['type'];
            $size = $file['size'];
            $tmp_name = $file['tmp_name'];

            // Move the file to a permanent location
            move_uploaded_file($tmp_name, 'uploads/' . $name);
            header("Location: ../index.php");
        }
    }

?>