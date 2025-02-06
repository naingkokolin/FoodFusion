<?php
require 'db.php';
session_start();

if (!isset($_SESSION['post_id'])) {
  $_SESSION['post_id'] = 0;
}

// Fetch posts
$result = $conn->query("SELECT * FROM community ORDER BY created_at DESC");

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='recipe-card'>";
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
    echo "<p><strong>Ingredients:</strong> " . $row['ingredients'] . "</p>";
    echo "<p><strong>Steps</strong> " . $row['steps'] . "</p>";

    // Corrected the typo here: src instead of scr
    echo "<img src='" . $row['image_url'] . "' alt='" . $row['title'] . "'/>";  // Corrected line

    echo "<div class='reactions'>";
    echo "<button><i class='fas fa-thumbs-up'></i></button>";
    echo "<button><i class='fas fa-thumbs-down'></i></button>";
    echo "<button><i class='fas fa-comment'></i></button>";
    echo "</div>";

    echo "<div class='comments'>";
    echo "<form method='POST'>";
    echo "<textarea name='content' placeholder='Add a comment...'></textarea>";
    echo "<input type='hidden' name='post_id' value='" . $row['post_id'] . "'>";
    echo "<button type='submit'>Comment</button>";
    echo "</form>";
    echo "<div class='comment-list'>";

    $post_id = $row['post_id'];
    $comments_query = "SELECT * FROM comments WHERE post_id = $post_id ORDER BY created_at ASC";
    $comments_result = $conn->query($comments_query);

    if ($comments_result->num_rows > 0) {
      while ($comment_row = $comments_result->fetch_assoc()) {
        echo "<div class='comment-item'>" . $comment_row['content'] . "</div>";
      }
    }

    echo "</div>";
    echo "</div>";

    echo "</div>";
  }
} else {
  echo "No Community Post Found!!!";
}

?>