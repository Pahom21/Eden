<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styling/style.css">
    <title>View Blogs</title>
</head>
<body class="blogdisplay">
 <nav>
    <a href="" class="left-links">Home</a>
    <a href="" class="left-links">About</a>
    <a href="" class="left-links">Contact us</a>
        <?php
        if(isset($_SESSION["control"])){
            ?>
            <a class="left-links" href="../blog_input/blog.php">Create Blog</a>
            <a class="left-links" href="../viewingfile/blogs.php">View Blog</a>
            <a class="right-links">Welcome <?php print $_SESSION["control"]["fullname"];?></a>
            <a class="right-links" href="../processes/signoutprocess.php">Sign-Out</a>
            <?php
        }else{
            ?>
            <a class="right-links" href="../signin/Signin.html">Sign-In</a>
            <a class="right-links" href="../signup/signup.php">Sign-Up</a>
        <?php
        }
        ?> 
    </nav>
    <h1 class="Displayheader">Articles</h1>
    <?php
        require_once "../Connection/db_connect.php";
        $fetchquery="SELECT * FROM main_table ORDER BY Publication_Date DESC LIMIT 4";
        $result=$db_connect->query($fetchquery);

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                ?>
                <div class="articles">
                    <ol>
                        <li>
                            <h2 id="articleheader"><?php print $row["Article_Title"];?></h2>
                            <p><?php print nl2br( $row["Article_Text"]);?></p>
                            
                              
                
                                <a href="../processes/edit.php?ArticleId=<?php echo $row["ArticleId"];?>">Edit</a> | <a href="../processes/delete.php?ArticleId=<?php echo $row["ArticleId"]; ?>">Delete</a>
                                
                            
                            <p class="info">Author: <?php print $row["Author_fullName"];?> &nbsp Published On: <?php print $row["Publication_Date"];?></p>
                        </li>
                    </ol>
                </div>

                <?php
            }
        }
        else{
            die("No articles to display");
        }
        $db_connect->close();
    ?> 
</body>
</html>