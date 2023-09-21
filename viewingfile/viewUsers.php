<?php
include_once "db_connect.php";

?>
<div class =header>
    <h1>Header</h1>
</div>

<div class ="content_section_row">
    

<table>
<h1>List of Users</h1>
                <table>
                    <tr>
                        <th>#</th>
                        <th>Author's name</th>
                        <th>Username</th>
                        <th>Email</th>
                       
                    </tr>

      <?php
        $userId=$_GET['userId'];
        $spot_author="SELECT * FROM `authors` WHERE $userID=`userId` ORDER BY ASC";
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