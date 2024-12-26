<?php include 'db.php';




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <h1>User Management</h1>
    <label for="username">Username</label>
    <input type="text" name="username"><br>
    <label for="password">Password</label>
    <input type="text" name="password"><br>
    <input type="submit"><br>
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
    </tr><br>
    <tr>
        <td>sup</td>
        <td>foo</td>
        <td>-mr.T</td>
        <td><button>Edit</button><button>Delete</button></td>
    </tr>


</body>
<script src="script.js"></script>

</html>