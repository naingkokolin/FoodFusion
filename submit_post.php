<?php
require 'db.php';
session_start();

// Get form data
$title = $_POST['post-title'];
$description = $_POST['post-description'];
$ingredients = $_POST['post-ingredients'];
$instructions = $_POST['post-instruction'];
$cuisine_type = $_POST['cuisine_type'];
$dietary_preference = $_POST['dietary_preference'];
$cooking_difficulty = $_POST['cooking_difficulty'];
$image_path = $_POST['post-image'];
$userID = $_SESSION['user_id'];

// Insert into database
$stmt = $conn->prepare("INSERT into recipes (title, description, ingredients, instructions, cuisine_type, dietary_preferences, cooking_difficulty, image_path, userID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssi", $title, $description, $ingredients, $instructions, $cuisine_type, $dietary_preference, $cooking_difficulty, $image_path, $userID);
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect back to the community page
header("Location: community.php");
exit();
?>