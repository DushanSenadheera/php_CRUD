<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="backend/loginAccount.php" method="post">
        <input type="text" name="fname" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Login">
    </form>
    Don't you have an account <a href="register.php">Register</a> from Here
</body>
</html>