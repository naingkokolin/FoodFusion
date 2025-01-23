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
  <div class="page-container">

    <div class="main-container">
      <!-- overlay text inside image -->
      <div class="text-image-container">
        <img src="./img/ice-cream-01.webp" alt="Food Fusion">
        <div class="centered-text">
          Discover the joy of cooking and sharing your culinary creations with the world.
        </div>
      </div>

      <div class="text-button-container">
        <img src="./img/a-05.jpg" alt="food fusion photo">
        <div class="paragraph">
          To inspire and empower individuals to embrace home cooking and culinary creativity by providing a vibrant platform for sharing recipes, culinary tips,and fostering a supportive community of food enthusiasts worldwide.
        </div>
        <button class="get-start-btn" name="getStart" id="js-get-start-btn">Get Start</button>
      </div>
    </div> <!-- end of main container -->

    <!-- Integrated News Section -->
    <h2 class="news-feed-text">* Integrated News Feed Section *</h2>
    <div class="news-container">
      <div class="news-card">
        <img src="./img/news-01.jpeg" alt="News Images">
        <h4>Mastering the Art of French Pastry</h4>
        <p>
          Discover the secrets to perfecting classic French pastries with our step-by-step guide. From flaky croissants to rich éclairs, elevate your baking skills with these recipes
        </p>
      </div>

      <div class="news-card">
        <img src="./img/news-01.jpeg" alt="News Images">
        <h4>Mastering the Art of French Pastry</h4>
        <p>
          Discover the secrets to perfecting classic French pastries with our step-by-step guide. From flaky croissants to rich éclairs, elevate your baking skills with these recipes
        </p>
      </div>

      <div class="news-card">
        <img src="./img/news-01.jpeg" alt="News Images">
        <h4>Mastering the Art of French Pastry</h4>
        <p>
          Discover the secrets to perfecting classic French pastries with our step-by-step guide. From flaky croissants to rich éclairs, elevate your baking skills with these recipes
        </p>
      </div>

      <div class="news-card">
        <img src="./img/news-01.jpeg" alt="News Images">
        <h4>Mastering the Art of French Pastry</h4>
        <p>
          Discover the secrets to perfecting classic French pastries with our step-by-step guide. From flaky croissants to rich éclairs, elevate your baking skills with these recipes
        </p>
      </div>

      <div class="news-card">
        <img src="./img/news-01.jpeg" alt="News Images">
        <h4>Mastering the Art of French Pastry</h4>
        <p>
          Discover the secrets to perfecting classic French pastries with our step-by-step guide. From flaky croissants to rich éclairs, elevate your baking skills with these recipes
        </p>
      </div>

      <div class="news-card">
        <img src="./img/news-01.jpeg" alt="News Images">
        <h4>Mastering the Art of French Pastry</h4>
        <p>
          Discover the secrets to perfecting classic French pastries with our step-by-step guide. From flaky croissants to rich éclairs, elevate your baking skills with these recipes.
        </p>
      </div>
    </div> <!-- End of Integrated News Section -->

    <!-- Carousel Section -->
    <h2 class="cooking-events-text">* Upcoming Cooking Events *</h2>

    <div class="carousel-container">

    </div> <!-- End of Carousel Section -->

  </div>

  <!-- TODO: add footer -->

  <?php
  // TODO: ADD footer 
  // include('footer.php');

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

  <?
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodfusion";

  if (isset($_POST["login"])) {
    $email = htmlspecialchars($_POST["loginEmail"]);
    $password = htmlspecialchars($_POST["loginPassword"]);

    $conn = new mysqli("localhost", "root", "", "foodfusion");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Check login attempts
    $checkAttempts = "SELECT * FROM login_attempts WHERE email = '$email'";
    $attemptsResult = $conn->query($checkAttempts);

    if ($attemptsResult->num_rows > 0) {
      $attemptsRow = $attemptsResult->fetch_assoc();
      if ($attemptsRow['attempts'] >= 5) {
        echo "<script>alert('Too many failed login attempts. Try again later.');</script>";
        exit();
      }
    } else {
      $conn->query("INSERT INTO login_attempts (email, attempts) VALUES ('$email', 0)");
    }

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      if (password_verify($password, $row['password'])) {
        // Reset attempts on successful login
        $conn->query("UPDATE login_attempts SET attempts = 0 WHERE email = '$email'");
        echo "<script>alert('Login successful');</script>";
      } else {
        // Increment attempts on failed login
        $conn->query("UPDATE login_attempts SET attempts = attempts + 1 WHERE email = '$email'");
        echo "<script>alert('Incorrect password');</script>";
      }
    } else {
      echo "<script>alert('Email not registered');</script>";
    }
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