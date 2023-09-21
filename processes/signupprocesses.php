<?php

require_once "../Connection/db_connect.php";

if(isset($_POST["Submit"])) {
    $fullname = ucwords(strtolower($_POST["fullname"]));
    $username = strtolower($_POST["username"]);
    $email = strtolower(addslashes($_POST["email"]));
    $password = addslashes($_POST["password"]);
    $confPass = addslashes($_POST["confpassword"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email";
    }
    
    
    if (strcmp($password, $confPass) != 0) {
        die("Passwords do not match");
    }

    $hashPass = password_hash($confPass, PASSWORD_DEFAULT);

    $insertUser = "INSERT INTO authors (fullname, username, email, password)VALUES ('$fullname', '$username', '$email', '$hashPass')";

    // Execute the SQL statement
    if ($db_connect->query($insertUser) === TRUE) {
        echo "New author inserted successfully";
    } else {
        echo "Error: " . $insertUser . "<br>" . $db_connect->error;
    }
}

?>
