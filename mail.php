<?php
    require_once "classloader.php";

    //User details 
    $details["name_receiver"] = $_POST["name"];
    $details["email_receiver"] = $_post["email"];
    $details["email_subject_line"] = "WELCOME TO ". $conf["site_name"] ." ! ACCOUNT VERIFICATION";
    $details["email_message"] = "
    Hi " . $details["name_receiver"] . ",

    Thanks for registering an account with '" . $conf["site_name"] . "'.
    Kindly click <a href='#'>here</a> to finish sign up.

    Best Regards," . $conf["site_name"];

    $OBJ_Mails->SendeMail($details, $conf);

    // Redirect the user to another page
    header("Location: ./");
    exit();


?>