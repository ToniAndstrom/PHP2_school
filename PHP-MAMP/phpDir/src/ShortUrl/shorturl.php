<?php
require __DIR__ . "/vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/");
$dotenv->load();
$dotenv->required([
  "ACCESS_TOKEN"
])->notEmpty();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $url = 'https://unelma.io/api/v1/link';

  $accessToken = $_ENV["ACCESS_TOKEN"];

  //$longUrl = $_POST['longUrl'];
  $longUrl = filter_input(INPUT_POST, 'longUrl', FILTER_SANITIZE_URL);
  $data = [
    "type" => "direct",
    "password" => null,
    "active" => true,
    "expires_at" => "2025-05-06",
    "activates_at" => "2024-03-25",
    "utm" => "utm_source=google&utm_medium=banner",
    "domain_id" => null,
    "long_url" => $longUrl
  ];

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken,
  ]);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

  $response = curl_exec($ch);

  if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
  } else {

    $responseDecoded = json_decode($response, true);
  }


  curl_close($ch);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>URL Shortener</title>
</head>

<body>
  <form method="post">
    <label for="longUrl">Enter URL to shorten:</label><br>
    <input type="text" id="longUrl" name="longUrl" required><br>
    <button type="submit">Shorten URL</button>
  </form>
  <div class="answer">
    <?php if (json_last_error() !== JSON_ERROR_NONE) {
      echo 'Error decoding JSON response: ' . json_last_error_msg();
    } elseif (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {

      echo 'Shortened URL: <a href="' . $responseDecoded['link']['short_url'] . '">' . $responseDecoded['link']['short_url'] . '</a>';
    } else {

      echo 'The key "short_url" does not exist in the response.';
    } ?>
  </div>

</body>

</html>