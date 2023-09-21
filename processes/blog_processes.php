<?php
    require_once "../Connection/db_connect.php";

    if(isset($_POST["Submit"])){
        $fullname=ucwords(addslashes($_POST["Fullname"]));
        $ArticleTitle=ucwords(addslashes($_POST["Title"]));
        $Article=addslashes($_POST["Article"]);
    }
        $insertquery="INSERT INTO main_table (Author_fullname,Article_Title,Article_Text)VALUES('$fullname','$ArticleTitle','$Article')";

        if($db_connect->query($insertquery)===TRUE){
            echo "Record taken succesfully";
            header("Location: ../viewingfile/blogs.php");
        }
        else{
            echo "Error taking record: ".$db_connect->error;
        }

        $db_connect->close();

    


?>