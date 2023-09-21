<?php
$hostname="localhost";
$database_user="root";
$database_password="";
$db_name="blog_db";


$db_connect=new mysqli($hostname,$database_user,$database_password,$db_name);
if($db_connect->connect_error){
    die("Error connecting to database ".$db_connect->connect_error."<br>");

}/*
else{
    echo "Database connection sucessful.<br>";
}
/*
//CREATING THE DATABASE 
$db_create_sql="CREATE DATABASE blog_db";
if($conn->query($db_create_sql)===TRUE){
    echo "Database created successfully";
}
else{
    die("Error creating database: ".$conn->error);
}*/
//CREATING THE TABLES 
/*$table_creation_query="CREATE TABLE main_table
    (
        Userid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Author_fullName VARCHAR(255) NOT NULL ,
        Author_EmailAddress VARCHAR(255) NOT NULL UNIQUE DEFAULT(''),
        Password VARCHAR(60) NOT NULL,
        Article_Title VARCHAR(100) NOT NULL DEFAULT(''),
        Article_Text VARCHAR(30000) NOT NULL DEFAULT(''),
        Publication_Date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
if($conn->query($table_creation_query)===TRUE){
    echo "Table created successfully";
}
else{
    die("Error creating tables: ".$conn->error);
}
?>*/
