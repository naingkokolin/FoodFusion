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
    <button id="accpt-cookies">Reject</button>
  </div>

  <!-- navigation bar -->
   <?php include("navbar.php"); ?>

  <!-- Main Content -->
  <main>
    <section id="intro">
      <h1>Welcome to FoodFusion</h1>
      <p>
        Explore, cook, and share your culinary journey with our vibrant community!
      </p>
      <button id="join-btn">Join Us</button>
    </section>

    <!-- Carousel -->
    <section id="carousel">
      <h2>Upcoming Events</h2>
      <div class="carousel-container">
        <!-- Add carousel items here -->
      </div>
    </section>

    <!-- News Feed -->
    <section id="news-feed">
      <h2>Featured Recipes & Trends</h2>
      <div class="news-grid">
        <!-- Add recipe cards dynamically -->
      </div>
    </section>
  </main>

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
        <form action="#" method="POST" id="signUp">
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

      <!-- Login Form -->
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
  </div>

  <!-- Footer -->
  <!-- <footer>
    <p>&copy; 2024 Food Fusion | <a href="#">Privacy Policy</a></p>
    <div class="social-links">
      <a href="#">Facebook</a>
      <a href="#">Instagram</a>
      <a href="#">Twitter</a>
    </div>
  </footer> -->

  <?php include('footer.php'); ?>  

  <script src="./scripts/home.js"></script>
</body>

</html>