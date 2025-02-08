<?php 
require_once 'db.php';

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];

$stmt = $conn->prepare(
"INSERT INTO contacts (fullName, email, type, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullName, $email, $type, $message);
$stmt->execute();
echo "<script>window.location.href='contact-us.php';</script>";

$conn->close();
?>