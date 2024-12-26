<?php
include 'booksitedb.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $publishing_year = $_POST['publishing_year'];
    $genre = $_POST['genre'];


    if (!empty($title) && !empty($description) && !empty($author) && !empty($publishing_year) && !empty($genre)) {
      $stmt = $conn->prepare("INSERT INTO books (title, description, author, publishing_year, genre ) VALUES (?,?,?,?,?)");

      $stmt->bind_param("sssis", $title, $description, $author, $publishing_year, $genre);
      if ($stmt->execute()) {
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
      } else {
        die('Query insertion failed');
      }

      $stmt->close();
    } else {
      echo 'Please fill in all the fields.';
    }
  }

  if (isset($_POST["delete_id"])) {
    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
    $stmt->bind_param("i", $_POST["delete_id"]);
    $stmt->execute();
    $stmt->close();
  }



  if (isset($_POST["edit_id"])) {
    $stmt = $conn->prepare("UPDATE books SET title = ?, description = ?, author = ?, publishing_year = ?, genre = ? WHERE id = ?");
    $stmt->bind_param("sssisi", $_POST["edit_title"], $_POST["edit_description"], $_POST["edit_author"], $_POST["edit_publishing_year"], $_POST["edit_genre"], $_POST["edit_id"]);
    if ($stmt === false) {
      die("Praparation failed" . $conn->error);
    }
    $stmt->execute();
    $stmt->close();
  }

//  $result = $conn->query("SELECT * FROM books");
//   $rows = array();
//   while ($row = $result->fetch_assoc()) {
//     $rows[] = $row;
//   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="booksite.css">
  <script src="booksite.js"></script>
  <title>Document</title>
</head>

<body>



  <div class="container">
    <form action="booksite.php" method="post">
      <h1>ADD BOOK</h1>

      <label for="title">TITLE</label>
      <input type="text" name="title" required><br>

      <label for="description">DESCRIPTION</label>
      <input type="text" name="description" required><br>

      <label for="author">AUTHOR</label>
      <input type="text" name="author" required><br>

      <label for="publishing_year">PUBLISHING YEAR</label>
      <input type="number" name="publishing_year" required><br>

      <label for="genre">GENRE</label>
      <select name="genre" id="genre">
        <option value="Adventure">Adventure</option>
        <option value="Classic Literature">Classic Literature</option>
        <option value="Coming-of-age">Coming-of-age</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Historical Fiction">Historical Fiction</option>
        <option value="Horror">Horror</option>
        <option value="Mystery">Mystery</option>
        <option value="Romance">Romance</option>
        <option value="Science Fiction">Science Fiction</option>
      </select>

      <input type="submit" name="submit" id="submit">
    </form>


    <table class="default-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Author</th>
          <th>Publishing Year</th>
          <th>Genre</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $result = $conn->query("SELECT * FROM books");
  $rows = array();
  while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
  }?>
        <?php if ( $result->num_rows > 0) : ?>
          <?php foreach ($result as $row) : ?>
            <tr data-id="<?= $row['id'] ?>">
              <td><?= $row["id"] ?></td>
              <td><?= htmlspecialchars($row["title"]) ?></td>
              <td><?= htmlspecialchars($row["description"]) ?></td>
              <td><?= htmlspecialchars($row["author"]) ?></td>
              <td><?= htmlspecialchars($row["publishing_year"]) ?></td>
              <td><?= htmlspecialchars($row["genre"]) ?></td>

              <td class='actions'>
                <!-- Buttons for editing and deleting -->
                <button onclick="toggleEditMode(this.parentNode.parentNode, true)">Edit</button>
                <button onclick="deleteRow(<?= $row['id'] ?>)">Delete</button>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan='4'>No results</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
  <footer> &copy;Toni Andström</footer>
</body>

</html>
<?php
$conn->close();
?>