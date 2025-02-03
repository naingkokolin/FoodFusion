<?php
session_start();
// Database connection (replace with your credentials)
include 'db.php';

// Fetch user data (assuming you have a user_id in the session)
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  $sql = "SELECT firstName, lastName, email, password FROM user WHERE userID = $user_id"; // Replace 'users' with your table name
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $password = $row['password'];
  } else {
    echo "User not found.";
    exit;
  }
} else {
  echo "User not logged in.";
  echo "<script>window.location.href='index.php'</script>";
}

// Handle update form submission
if (isset($_POST['update'])) {
  $newFirstName = $_POST['firstName'];
  $newLastName = $_POST['lastName'];
  $newEmail = $_POST['email'];

  // Perform validation (similar to your signup validation) here

  $update_sql = "UPDATE users SET firstName = '$newFirstName', lastName = '$newLastName', email = '$newEmail' WHERE id = $user_id";
  if ($conn->query($update_sql) === TRUE) {
    // Update successful, refresh the page or display a success message
    header("Location: profile.php"); // Refresh the page
    exit;
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/profile.css">
  <title>Profile</title>
</head>

<body>
  <h1>Profile</h1>

  <p><strong>First Name:</strong> <span id="firstNameDisplay"><?php echo $firstName; ?></span></p>
  <p><strong>Last Name:</strong> <span id="lastNameDisplay"><?php echo $lastName; ?></span></p>
  <p><strong>Email:</strong> <span id="emailDisplay"><?php echo $email; ?></span></p>
  <p class="password-container">
    <strong>Password:</strong>
    <span id="passwordDisplay">••••••••</span>
    <span class="eye-icon" id="eyeIcon" onclick="togglePasswordVisibility()">&#128065;</span>
  </p>

  <button id="editBtn" onclick="openModal()">Edit Profile</button>

  <!-- Edit Profile Modal -->
  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" id="modalCloseBtn" onclick="closeModal()">&times;</span>
      <h2>Edit Profile</h2>
      <form method="post" action="profile.php">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" required>
        <div class="error" id="firstNameError"></div>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>" required>
        <div class="error" id="lastNameError"></div>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
        <div class="error" id="emailError"></div>

        <button type="submit" class="update-btn" onclick="updateCheck()">Update</button>
      </form>
    </div>
  </div>
</body>

<script src="./scripts/profile.js"></script>

</html>

<!-- // TODO: add fetch_user.php -->