<?php
require 'db.php';

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
    echo "<textarea placeholder='Add a comment'></textarea>";
    echo "<button>Comment</button>";
    echo "</div>";

    echo "</div>";
  }
} else {
  echo "No Community Post Found!!!";
}

?>