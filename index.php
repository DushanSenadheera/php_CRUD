<?php
 session_start();
 $name = $_SESSION['username'];
 $id = $_SESSION['userID'];

 if($name == null){
     header("Location: login.php");
 }
 else{
    require 'backend/userDetails.php';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $name ?></h1>
    <form action="backend/fileUpload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>  

    <h3>User Profile</h3>
    <form action="backend/updateAccount.php" method="post">
        <input type="text" disabled name="fname" value="<?php echo $fname ?>">
        <input type="text" name="lname" value="<?php echo $lname ?>">
        <input type="submit" value="Update">
    </form>

    <h3>Delete Account</h3>
    <form action="backend/deleteAccount.php" method="post">
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Delete">
    </form>
</body>
</html>