<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
    if(!isset($_SESSION["control"])){
        echo"Please login";
        exit();
    }
    else{
        require_once "../Connection/db_connect.php";
        if(isset($_GET["ArticleId"]) && isset($_GET["Author_fullName"]))
        {
            $articleid=$_GET["ArticleId"];
            $author=$_GET["Author_fullName"];
            if($_SESSION["control"]["Author_fullName"]==$author){
                $del_sql="DELETE FROM main_table WHERE ArticleId=$articleid ";

                if($db_connect->query($del_sql)===TRUE){
                    echo "Record Deleted!";
                    header("location:../viewingfile/blogs.php");
                    exit();
                }
                else{
                    die("Error deleting record");
                }
            }

            
            $db_connect->close();
        }
    }
    
    ?>    
</body>
</html>