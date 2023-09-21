
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "author_details";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function checklogin(){
    if(!isset($_SESSION["control"]) || !is_array($_SESSION["control"])){
        header("Location: ./?notset");
        exit();
    }
}
?>



