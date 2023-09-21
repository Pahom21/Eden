<?php
session_start();
require_once "../Connection/db_connect.php";

// Check if the user is logged in
if (!isset($_SESSION["control"])) {
    // Redirect the user to the sign-in page or display an error message
    header("Location: ../sign-in.php");
    exit;
}

  // Check if the form data is submitted
  if (isset($_POST["Update"]))
   {
    // Check if the article ID and other required fields are provided
    
        $fullName = ucwords($_POST["FullName"]);
        $ArticleTitle=ucwords(addslashes($_POST["Title"]));
        $Article=addslashes($_POST["Article"]);
        $ArticleId=$_POST["ArticleId"];

        
        // Update the blog post in the database
        
        $sql = "UPDATE main_table SET Author_fullName='$fullName', Article_Title=' $ArticleTitle', Article_Text='$Article' WHERE ArticleId='$ArticleId' LIMIT 1";
        if ($db_conn->query($sql)===TRUE ) {
            // Redirect the user to the updated blog post or display a success message
            header("Location: ../viewingfile/blogs.php");
            exit;
        } else {
            // Display an error message for the database update failure
            die("Error updating the blog post");
        }
        $db_conn->close();
    } 
    else {
        // Redirect the user or display an error message for missing form data
        header("Location: ../viewingfile/blogs.php");
        exit;
    }
?>
