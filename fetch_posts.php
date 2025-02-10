<?php
require 'db.php';
session_start();

if (!isset($_SESSION['recipe_id'])) {
  $_SESSION['recipe_id'] = 0;
}

$result = $conn->query("SELECT * FROM recipes ORDER BY created_at DESC");

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='recipe-card'>";
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
    echo "<p><strong>Ingredients:</strong> " . $row['ingredients'] . "</p>";

    echo "<img src='" . $row['image_path'] . "' alt='" . $row['title'] . "'/>";

    echo "<div class='reactions'>";
    echo "<button><i class='fas fa-thumbs-up'></i></button>";
    echo "<button><i class='fas fa-thumbs-down'></i></button>";
    echo "<button><i class='fas fa-comment'></i></button>";
    echo "</div>";

    echo "<div class='comments'>";
    echo "<form method='POST'>";
    echo "<textarea name='content' placeholder='Add a comment...'></textarea>";
    // echo "<input type='hidden' name='recipe_id' value='" . $row['recipe_id'] . "'>";
    echo "<button type='submit' data-recipe_id='" . $row['recipe_id'] . "'>Comment</button>";
    echo "</form>";
    echo "<div class='comment-list'>";

    $recipe_id = $row['recipe_id'];
    $comments_query = "SELECT * FROM comments WHERE recipe_id = $recipe_id ORDER BY created_at ASC";
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