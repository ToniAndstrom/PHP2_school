<?php
include 'db.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}


if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  if (!empty($username) && !empty($password)) {
    $stmt = $conn->prepare("UPDATE users SET username = ? , password = ? WHERE id = ?");

    if ($stmt === false) {
      die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ssi", $username, $password, $id);
    if ($stmt->execute()) {
      header("Location: " . $_SERVER["PHP_SELF"]);
    } else {
      die("Query insertion failed");
    }
    $stmt->close();
  } else {
    echo "username, password and id cannot be empty";
  }
  /*//Update the records in db
  $query = "UPDATE users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id";

  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Update query failed" . mysqli_error($conn));
  } else {
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
  }*/
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>

<body>
  <form action="update.php" method="post">

    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">

  </form>


</body>

</html>