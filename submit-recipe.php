<?php
require 'db.php';

// Get form data
$title = $_POST['recipe-title'];
$description = $_POST['recipe-description'];
$ingredients = $_POST['recipe-ingredients'];
$steps = $_POST['recipe-steps'];

// Insert into database
$stmt = $conn->prepare("INSERT INTO community (title, description, ingredients, steps) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $title, $description, $ingredients, $steps);
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect back to the community page
header("Location: community.php");
exit();
?>