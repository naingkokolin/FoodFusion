<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_id = $_POST['post_id'];
  $content = $_POST['content'];
  $user_id = $_SESSION['user_id'];

  $stmt = $conn->prepare("INSERT INTO comments (post_id, content, userID) VALUES (?, ?, ?)");
  $stmt->bind_param("isi", $post_id, $content, $user_id);

  if ($stmt->execute()) {
    // Success (no need to echo anything back)
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

?>