<?php
    session_start();
    require_once "../Connection/db_connect.php";

    if (isset($_POST["Submit"])) {
        $entered_name = mysqli_escape_string($db_connect, $_POST["name"]);
        $entered_password = mysqli_escape_string($db_connect, $_POST["password"]);

        $get_details = "SELECT * FROM Authors WHERE fullname='$entered_name'";
        $results = $db_connect->query($get_details);

        if ($results->num_rows > 0) {
            $gotten_username = $results->fetch_assoc(); // Fetch the row
            $stored_password = $gotten_username["password"];

            if (password_verify($entered_password, $stored_password)) {
                $_SESSION["control"]=$gotten_username;
                header("Location: ../viewingfile/blogs.php");
            } else {
                die("Wrong Password.<br>Try Again");
            }
        } else {
            die("No results match your description.");
        }
    } else {
        header("Location: ../");
    }
?>