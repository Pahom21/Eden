<?php
include_once "db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> User list</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  

<div class =header>
    <h1>Header</h1>
</div>

<div class ="content_section_row">
    
<h1>List of users</h1>
  <table>
                     <tr>
                       <th>#</th>
                        <th>Author's name</th>
                        <th>Username</th>
                        <th>Email</th>
                       
                    </tr>

      <?php
        $userId=$_GET['userId'];
        $spot_author="SELECT * FROM `authors` WHERE $userId=`userId` ORDER BY ASC";
        $res_spot_author=$conn->query($spot_author);

        if($res_spot_author->num_rows >0){
            $counter=1;
            while($user_row=$res_spot_author->fetch_assoc()){
            ?>
          <tr>
          <td><?php print $counter;$counter  ?> 
         <td><?php print $user_row["userID "] ?>  </td>
         <td><?php print $user_row["fullname"] ?> </td>
         <td><?php  print $user_row["username"]?> </td>
         <td> <?php  print $user_row["email"]?> </td>
          </tr>

     <?php
          }
        }else{
       echo "0 results";
        }
        
      ?>
     

</table>

</div>
 <!-- Add Bootstrap JS and jQuery scripts here (at the end of the body) -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>