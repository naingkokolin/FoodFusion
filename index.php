<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Food Fusion</title>
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="icon" href="./icons/search-icon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
  <?php include 'navbar.php'; ?>


  <div class="main-container">
    <!-- overlay text inside image -->
    <div class="container">
      <img src="./img/itilian-pizza-2.jpg" alt="Food Fusion">
      <div class="centered-text">
        Discover the joy of cooking and sharing your culinary creations with the world!
      </div>
    </div>

    <!--  -->
  </div>

  <?php include 'footer.php'; ?>

  <?php

  // $servername = "localhost";
  // $username = "root";
  // $password = "";
  // $dbname = "foodfusion";

  if (isset($_POST["signUp"])) {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $conn = new mysqli("localhost", "root", "", "foodfusion");

    // check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $checkEmail = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
      echo "This email is already registered!";
    } else {
      $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
      $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
      } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
      }
    }

    $conn->close();
  }

  ?>

</body>

</html>

<!-- 
To inspire and empower individuals to embrace home cooking and culinary
creativity by providing a vibrant platform for sharing recipes, culinary tips,
and fostering a supportive community of food enthusiasts worldwide.      
-->

<!-- 
ပုံကို blur လုပ်။

-->