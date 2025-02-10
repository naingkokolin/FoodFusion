<?php
require 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
  die("User not Loged in!!!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $recipe_id = $_POST['recipe_id'];
  $content = $_POST['content'];
  $user_id = $_SESSION['user_id'];

  var_dump($recipe_id, $content, $user_id);

  $stmt = $conn->prepare("INSERT INTO comments (recipe_id, content, userID) VALUES (?, ?, ?)");
  $stmt->bind_param("isi", $recipe_id, $content, $user_id);

  if ($stmt->execute()) {
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

?>