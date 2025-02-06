<?php
require 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
  die("User not Loged in!!!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // $post_id = $_POST['post_id'];
  $post_id = $_POST['post_id'];
  $content = $_POST['content'];
  $user_id = $_SESSION['user_id'];

  echo "<script>alert('In submit comment php file');</script>";

  $stmt = $conn->prepare("INSERT INTO comments (post_id, userID, content) VALUES (?, ?, ?)");
  $stmt->bind_param("iis", $post_id, $user_id, $content);

  if ($stmt->execute()) {
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

?>