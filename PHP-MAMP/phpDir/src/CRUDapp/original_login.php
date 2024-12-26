<?php
$user = "";
$pass = "";
if (isset($_POST["submit"])) {
    // echo "yes, we received data";

    $user = $_POST["username"];
    $pass = $_POST["password"];
}

//validate the form
if ($user && $pass) {
    echo $user . " " . $pass;
} else {
    echo "Username and password fields cannot be blank";
}

$host = "db";

//database user name
$dbname = "Skeletor";
$dbuser = "root";
$dbpass = "lionPass";

// Check the mysql connection status
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully";
}

//Create the records inside db
//$query = "INSERT INTO users(username, password)"; //first half
//$query .= "VALUES('$user', '$pass')"; //second half

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);




if (!$result) {
    die("Reading db records failed");
}
while ($row = mysqli_fetch_assoc($result)) {
?>
    <pre>
        <?php
        print_r($row);
        ?>
    </pre>
<?php
}


?>
<form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username">
    <label for=" password">Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">