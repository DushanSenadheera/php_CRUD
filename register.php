<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="backend/createAccount.php" method="post">
        <input type="text" name="fname" placeholder="First name" required>
        <input type="text" name="lname" placeholder="Last name" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Register">
    </form>
    Already have an account? <a href="login.php">Sign In</a> here
</body>
</html>