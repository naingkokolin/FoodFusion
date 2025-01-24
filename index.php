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

    <!-- Modal (Sign Up and Login Form) -->
    <div class="modal" id="joinModal">
      <div class="modal-content">
        <span class="close-btn" id="closeBtn">&times;</span>
        <h2>Join FoodFusion</h2>
        <!-- Tabs for Sign Up and Login -->
        <div class="form-tabs">
          <button class="tab-link active" id="signUpTab">Sign Up</button>
          <button class="tab-link" id="loginTab">Login</button>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container" id="signUpForm">
          <form action="./index.php" method="POST" id="signUp">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="signUp">Sign Up</button>
          </form>
        </div>

        <!-- Login Form -->
        <div class="form-container" id="loginForm" style="display:none;">
          <form action="./index.php" method="POST" id="login">
            <label for="loginEmail">Email:</label>
            <input type="email" id="loginEmail" name="loginEmail" required>

            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
            <p class="fail-attempt" id="js-fail-attempt"></p>

            <button type="submit" name="login">Login</button>
          </form>
        </div>
      </div>
    </div>

  </div>

  <!-- // TODO: ADD FOOTER -->
  <script src="./scripts/home.js"></script>
</body>


<script>
  // let getStartBtn = document.getElementById('js-get-start-btn');
  // getStartBtn.addEventListener('click', () => {
  //   alert('Get Started');
  // });
</script>

</html>

<!-- 
To inspire and empower individuals to embrace home cooking and culinary
creativity by providing a vibrant platform for sharing recipes, culinary tips,
and fostering a supportive community of food enthusiasts worldwide.      
-->

<!-- 
ပုံကို blur လုပ်။

-->