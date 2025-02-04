<?php
require 'db.php';

// Fetch posts
$result = $conn->query("SELECT * FROM community ORDER BY created_at DESC");
$posts = [];
while ($row = $result->fetch_assoc()) {
  $posts[] = $row;
}

return $posts;
?>