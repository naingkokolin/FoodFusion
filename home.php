<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">FoodFusion</title>
  <link rel="stylesheet" href="./styles/home.css">
  <link rel="stylesheet" href="./styles/general.css">
</head>

<body>
  <!-- Cookie Consent -->
  <div id="cookie-consent">
    <p>We use cookies to improve your experience. <a href="#" id="learn-more-text">Learn more</a>.</p>
    <button id="accept-cookies">Accept</button>
    <button id="accept-cookies">Reject</button>
  </div>

  <!-- navigation bar -->
  <?php include("navbar.php"); ?>

  <!-- Main Content -->
  <main>
    <section id="intro">
      <h1 class="welcome-text">Welcome to FoodFusion</h1>
      <p>
        To inspire and empower individuals to embrace home cooking and culinary
        creativity by providing a vibrant platform for sharing recipes, culinary tips,
        and fostering a supportive community of food enthusiasts worldwide.
      </p>
      <button id="join-us-btn">Join Us</button>
    </section>

    <!-- Carousel -->
    <section>
      <h2>Upcoming Events</h2>
      <div class="carousel-container">
        <div class="carousel">
          <img src="./img/itilian-pizza-2.jpg" alt="Image 1">
          <img src="https://via.placeholder.com/800x400?text=Image+2" alt="Image 2">
          <img src="https://via.placeholder.com/800x400?text=Image+3" alt="Image 3">
          <img src="https://via.placeholder.com/800x400?text=Image+4" alt="Image 4">
          <img src="https://via.placeholder.com/800x400?text=Image+5" alt="Image 5">
          <img src="https://via.placeholder.com/800x400?text=Image+6" alt="Image 6">
        </div>
      </div>

    </section>
  </main>

  <!-- Modal (Sign Up and Login Form) -->
  <!-- <div class="modal" id="joinModal">
    <div class="modal-content">
      <span class="close-btn" id="closeBtn">&times;</span>
      <h2>Join FoodFusion</h2>
      <div class="form-tabs">
        <button class="tab-link active" id="signUpTab">Sign Up</button>
        <button class="tab-link" id="loginTab">Login</button>
      </div>

      
      <div class="form-container" id="signUpForm">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="signUp">
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" required>

          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>

          <button type="submit">Sign Up</button>
        </form>
      </div>

      
      <div class="form-container" id="loginForm" style="display:none;">
        <form action="#" method="POST" id="login">
          <label for="loginEmail">Email:</label>
          <input type="email" id="loginEmail" name="loginEmail" required>

          <label for="loginPassword">Password:</label>
          <input type="password" id="loginPassword" name="loginPassword" required>

          <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </div> -->

  <?php include("footer.php"); ?>

  <?php
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstName = htmlspecialchars($_POST["firstName"]);
      $lastName =htmlspecialchars($_POST["lastName"]);
      $email =htmlspecialchars($_POST["email"]);
      $password =htmlspecialchars($_POST["password"]);

      // echo "<script>alert('First Name: $firstName, Last Name: $lastName, Email: $email, Password: $password');</script>";

      $conn = new mysqli("localhost", "root", "", "foodfusion");

      // check connection
      if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";

      if($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
      } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
      }

      $conn->close();
    }
  ?>

  <script src="./scripts/home.js"></script>
</body>

</html>