<?php
require_once('db.php');

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