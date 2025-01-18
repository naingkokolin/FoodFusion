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
    <div class="news-container">
      <h2>* Integrated News Feed Section *</h2>
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
    </div> <!-- End of Integrated News Section -->

    <!-- Carousel Section -->
    <div class="carousel-container">
      
    </div> <!-- End of Carousel Section -->

  </div>

  <!-- TODO: add footer -->

  <?php
  include('footer.php');

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