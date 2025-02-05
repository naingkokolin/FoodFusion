<?php
require 'db.php';
session_start();

// Get form data
$title = $_POST['post-title'];
$description = $_POST['post-description'];
$ingredients = $_POST['post-ingredients'];
$steps = $_POST['post-steps'];
$image_url = $_POST['post-image'];
$userID = $_SESSION['user_id'];

// Insert into database
$stmt = $conn->prepare("INSERT INTO community (title, description, ingredients, steps, image_url, userID) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $title, $description, $ingredients, $steps, $image_url, $userID);
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect back to the community page
header("Location: community.php");
exit();
?>