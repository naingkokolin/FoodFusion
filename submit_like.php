<?php
require 'db.php';
session_start();

if (isset($_POST['recipe_id'])) {
  $recipe_id = $_POST['recipe_id'];
  $user_id = $_SESSION['user_id'];

  $check_query = "SELECT * FROM reactions WHERE recipe_id = $recipe_id AND userID = $user_id";
  $check_result = $conn->query($check_query);

  if ($check_result->num_rows > 0) {
    $row = $check_result->fetch_assoc();
    if ($row['reaction_type'] == 'like') {
      echo "Already liked";
    } else {
      $update_query = "UPDATE reactions SET reaction_type = 'like' WHERE recipe_id = $recipe_id AND userID = $user_id";
      $conn->query($update_query);
      echo "Liked";
    }
  } else {
    $insert_query = "INSERT INTO reactions (recipe_id, userID, reaction_type) VALUES ($recipe_id, $user_id, 'like')";
    $conn->query($insert_query);
    echo "Liked";
  }
}
?>