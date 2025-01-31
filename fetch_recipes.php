<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodfusion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, description, ingredients, instructions, cuisine_type, dietary_preferences, cooking_difficulty, image_path FROM recipes";
$result = $conn->query($sql);

$recipes = []; // Initialize an empty array to store recipes

if ($result->num_rows > 0) {
  // Fetch data and store it in the $recipes array
  while ($row = $result->fetch_assoc()) {
    $recipes[] = $row; // Add each row to the $recipes array
  }
}

$conn->close();

// Return the $recipes array
return $recipes;
?>