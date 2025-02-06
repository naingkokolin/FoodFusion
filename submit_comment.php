<?php
require 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
  die("User not Loged in!!!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  if (!isset($_POST['post_id']) || !isset($_POST['content']) || !isset($_SESSION['user_id'])) {
    die("Error: Missing required data");
  }

  $post_id = $_POST['post_id'];
  $content = $_POST['content'];
  $user_id = $_SESSION['user_id'];

  error_log("Post ID: " . $post_id);
  error_log("Content: " . $content);
  error_log("User ID: " . $user_id);

  echo "<script>alert('In submit comment php file');</script>";

  $stmt = $conn->prepare("INSERT INTO comments (post_id, userID, content) VALUES (?, ?, ?)");
  $stmt->bind_param("iis", $post_id, $user_id, $content);

  if ($stmt->execute()) {
    // Success (no need to echo anything back)
    echo "ADDED comment";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

?>