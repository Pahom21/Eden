<?php
    session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Creation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styling/style.css">
</head>
<body>
<nav>
    <a href="../index.php" class="left-links">Home</a>
    <a href="../about.php" class="left-links">About</a>
    <a href="../ContactUs.php" class="left-links">Contact us</a>
        <?php
        if(isset($_SESSION["control"])){
            ?>
            <a class="left-links" href="../blog_input/blog.php">Create Blog</a>
            <a class="right-links" href="">Welcome <?php print $SESSION["control"]["Author_fullName"];?></a>
            <a class="right-links" href="../processes/signoutprocess.php">Sign-Out</a>
            <?php
        }else{
            ?>
            <a class="right-links" href="../signin/Signin.html">Sign-In</a>
            <a class="right-links" href="">Sign-Up</a>
        <?php
        }
        ?> 
    </nav>
    <form action="../processes/blog_processes.php" method="POST" autocomplete="false">
        <label for="FullName">Author's Full Name:</label>
        <input type="text" name="Fullname" id="FullName" required >
        <br>
        <br>
        <label for="Article Title">Article Title :</label>
        <input type="text" name="Title" id="Article Title" required >
        <br>
        <br>
        <label for="Full Text">Article :</label>
        <br>
        <textarea name="Article" rows="50" cols="100" id="Full Text"></textarea>
        <br>
        <input type="submit" value="CREATE" name="Submit">


    </form>    
</body>
</html>