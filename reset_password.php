<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $password =
    password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT, ['cost' => 12]);

  $update_sql = "UPDATE user SET `password` = '$password' WHERE email = '$email'";

  if ($conn->query($update_sql) === TRUE) {
    echo "<script>alert('reset psw success');</script>";
    header("Location: index.php");
    exit;
  } else {
    echo "<script>alert('reset psw fail');</script>";
  }
} else {
  echo "<script>alert('In reset WRONG!');</script>";
}
