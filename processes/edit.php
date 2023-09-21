<?php
    session_start();

    if(!isset($_SESSION["control"]))
    {
        die("Please sign in");
    }
    else{
        if (!isset($_GET["ArticleId"])) {
            header("Location: ../viewingfile/blogs.php");
            exit;
        }
        else
        {
            $articleId = $_GET["ArticleId"];
            require_once "../Connection/db_connect.php";
            $obtain_qry="SELECT * FROM main_table WHERE ArticleId=$articleId";
            $result=$db_connect->query($obtain_qry);
            if($result->num_rows>0)
            {
                while($ROWS=$result->fetch_assoc())
                {
                    $author=$ROWS["Author_fullName"];

                    if($_SESSION["control"]["fullname"]==$author)
                    {
                        ?>
                         <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Edit Blog</title>
                            <link rel="stylesheet" href="../styling/style.css">
                         </head>

                         <body>
                            <h1>Edit Blog</h1>
                            <form action="../processes/update.php" method="POST" autocomplete="off">
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
                            <input type="submit" value="Update" name="Update">
                            <br>
                            <input type="hidden" name="ArticleId" value="<?php print $ROWS["ArticleId"];?>">
                    </form>  
                    <?php 
                    }
                    else{
                        echo"You do not have authorization for the requested operation.";
                        exit();
                    }
                }
            }
            else{
                die("No results available at the moment");
            }
            $db_connect->close();
        }
    }
?>