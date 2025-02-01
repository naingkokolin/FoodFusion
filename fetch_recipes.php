<?php
require_once('db.php');

// $sql = "SELECT title, description, ingredients, instructions, cuisine_type, dietary_preferences, cooking_difficulty, image_path FROM recipes";

$sql = "SELECT * FROM recipes";

$result = $conn->query($sql);

$recipes = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $recipes[] = $row;
  }
}

// $conn->close();

return $recipes;
?>