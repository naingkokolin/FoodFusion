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

  // TODO: ADD FOOTER

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "root", "", "foodfusion");

    // Check connection
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }

    $showLgoinForm = false;
    $lockoutMessage = "";

    // For Sign Up
    if (isset($_POST["signUp"])) {
      $firstName = htmlspecialchars($_POST["firstName"]);
      $lastName = htmlspecialchars($_POST["lastName"]);
      $email = htmlspecialchars($_POST["email"]);
      $password = htmlspecialchars($_POST["password"]);

      $checkEmail = "SELECT * FROM user WHERE email = '$email'";
      $result = $conn->query($checkEmail);

      if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered!');</script>";
      } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('New record created successfully');</script>";
        } else {
          echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
      }
    }

    // For Login
    if (isset($_POST["login"])) {
      $email = htmlspecialchars($_POST["loginEmail"]);
      $password = htmlspecialchars($_POST["loginPassword"]);

      $checkAttempts = "SELECT * FROM login_attempts WHERE email = '$email'";
      $attemptsResult = $conn->query($checkAttempts);

      $query = $conn->prepare("SELECT attempts, last_attempt FROM fail_login_attempts WHERE email = ?");
      $query->bind_param("s", $loginEmail);
      $query->execute();
      $result = $query->get_result();

      $lockoutDuration = 180;
      $currentTime = time();

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
        $failAttempts = $row['fail_attempts'];
        if (password_verify($password, $row['password'])) {
          $conn->query("UPDATE login_attempts SET attempts = 0 WHERE email = '$email'");
          echo "<script>alert('Login successful');</script>";
        } else {
          $conn->query("UPDATE login_attempts SET attempts = attempts + 1 WHERE email = '$email'");
          echo "<script>alert('Incorrect password');</script>";
          $showLgoinForm = true;
        }
      } else {
        echo "<script>alert('Email not registered');</script>";
        $showLgoinForm = true;
      }
    }
    $conn->close();
  }
  ?>

  <script>
    <?php
    if ($showLoginForm): ?>
      document.getElementById('signUpForm').style.display = 'none';
      document.getElementById('loginForm').style.display = 'block';
    <?php endif; ?>
  </script>
</body>
<script src="./scripts/home.js"></script>

</html>

<!-- 
To inspire and empower individuals to embrace home cooking and culinary
creativity by providing a vibrant platform for sharing recipes, culinary tips,
and fostering a supportive community of food enthusiasts worldwide.      
-->

<!-- 
ပုံကို blur လုပ်။

-->