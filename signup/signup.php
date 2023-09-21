<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../processes/signupprocesses.php" method="post">
        <label for= "fullname">Enter your full name:</label><br>
        <input type="text" name="fullname" placeholder="fullname"><br><br>
        <label for= "username">Enter your username:</label><br>
        <input type="text" name="username" placeholder="username"><br><br>
        <label for= "email">Enter your email address:</label><br>
        <input type="email" name="email" placeholder="Email address"><br><br>
        <label for= "password">Enter your password:</label><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <label for= "confpassword">Enter your password:</label><br>
        <input type="password" name="confpassword" placeholder="Verify your password"><br><br>
        <input type="submit" name="Submit" value="Register">
    </form>
</body>
</html>