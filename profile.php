<?php
session_start();
// Database connection (replace with your credentials)
include 'db.php';

// Fetch user data (assuming you have a user_id in the session)
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  $sql = "SELECT firstName, lastName, email, password FROM user WHERE userID = $user_id";
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
  $newFirstName = htmlspecialchars($_POST['firstName']);
  $newLastName = htmlspecialchars($_POST['lastName']);
  $newEmail = htmlspecialchars($_POST['email']);
  $hashedPassword =
  password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT, ['cost' => 12]);

  // Perform validation (similar to your signup validation) here  

  $update_sql = "UPDATE user SET firstname = '$newFirstName', lastname = '$newLastName', email = '$newEmail', `password` = '$hashedPassword' WHERE userID = $user_id";
  if ($conn->query($update_sql) === TRUE) {
    $_SESSION['user'] = $newFirstName;
    header("Location: profile.php");
    exit;
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

// if (isset($_POST['update'])) {
//   $newFirstName = htmlspecialchars($_POST['firstName']);
//   $newLastName = htmlspecialchars($_POST['lastName']);
//   $newEmail = htmlspecialchars($_POST['email']);


//   $stmt = $conn->prepare("UPDATE user SET firstName = ?, lastName = ?, email = ? WHERE userID = ?");
//   $stmt->bind_param("sssi", $newFirstName, $newLastName, $newEmail, $user_id);

//   if ($stmt->execute()) {
//     $_SESSION['user'] = $newFirstName;
//     header("Location: profile.php");
//     exit;
//   } else {
//     echo "Error updating record: " . $stmt->error;
//   }

//   $stmt->close();

//   if (!empty($_POST['password'])) {
//     $newPassword = $_POST['password'];
//     $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

//     $stmt = $conn->prepare("UPDATE user SET password = ? WHERE userID = ?");
//     $stmt->bind_param("si", $hashedPassword, $user_id);

//     if ($stmt->execute()) {
//       echo "Password Updated.";
//     } else {
//       echo "Error updating password: " . $stmt->error;
//     }
//     $stmt->close();
//   }
// }

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
  <br><br><br>

  <button onclick="window.location.href='index.php'">Back to Home Page</button>

  <!-- Edit Profile Modal -->
  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" id="modalCloseBtn" onclick="closeModal()">&times;</span>
      <h2>Edit Profile</h2>
      <form method="post" action="profile.php" id="editForm">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" required>
        <div class="error" id="firstNameError"></div>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>" required>
        <div class="error" id="lastNameError"></div>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
        <div class="error" id="emailError"></div>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>" required>
        <div class="error" id="passwordError"></div>

        <button type="submit" name="update" class="update-btn" id="js-update-btn">Update</button>
      </form>

    </div>
  </div>
</body>

<script src="./scripts/profile.js"></script>

</html>

<!-- // TODO: add fetch_user.php -->