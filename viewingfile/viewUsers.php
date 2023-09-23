<?php
include_once "db_connect.php";

// Search query
if (isset($_GET['search'])) {
    $searchQuery = $_GET['search']; 
    $spot_author = "SELECT * FROM `authors` WHERE fullname LIKE ? ORDER BY userId ASC";
    $stmt = $conn->prepare($spot_author);
    $searchQuery = "%" . $searchQuery . "%"; 
    $stmt->bind_param("s", $searchQuery);
} else {
  $searchQuery = "%"; // Show all authors by default
  $spot_author = "SELECT * FROM `authors` WHERE fullname LIKE ? ORDER BY userId ASC";
  $stmt = $conn->prepare($spot_author);
  $stmt->bind_param("s", $searchQuery);
}



$stmt->execute();
$res_spot_author = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User list</title>

  <!-- Add Bootstrap CSS link -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="header">
        <h1>Header</h1>
    </div>

    <div class="content_section_row">
      <h1>List of users</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Author's name</th>
            <th>Username</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $userId = $_GET['userId'];
          $stmt = $conn->prepare("SELECT * FROM `authors` WHERE userId = ? ORDER BY userId ASC");
          $stmt->bind_param("i", $userId);
          $stmt->execute();
          $res_spot_author = $stmt->get_result();

          if ($res_spot_author->num_rows > 0) {
              $counter = 1;
              while ($user_row = $res_spot_author->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $user_row["userID"]; ?></td>
                    <td><?php echo $user_row["fullname"]; ?></td>
                    <td><?php echo $user_row["username"]; ?></td>
                    <td><?php echo $user_row["email"]; ?></td>
                  </tr>
                  <?php
                  $counter++;
              }
          } else {
              echo "<tr><td colspan='5'>0 results</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Bootstrap JS and jQuery scripts here (at the end of the body) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
