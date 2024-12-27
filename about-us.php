<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - FoodFusion</title>
  <link rel="stylesheet" href="styles/about-us.css">
  <link rel="stylesheet" href="/styles/general.css">
</head>

<body>
  <!-- Header -->
  <header>
    <!-- <nav>
      <div class="logo">FoodFusion</div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html" class="active">About Us</a></li>
        <li><a href="recipes.html">Recipes</a></li>
        <li><a href="community.html">Community</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </nav> -->
    <?php include("navbar.php"); ?>
  </header>

  <!-- About Us Section -->
  <section id="about-us">
    <div class="container">
      <h1>About FoodFusion</h1>
      <p>FoodFusion is a culinary platform that inspires home cooking and celebrates culinary creativity.
        Our mission is to bring food enthusiasts together to explore diverse cuisines, share cooking tips,
        and foster a vibrant community.</p>

      <h2>Our Philosophy</h2>
      <p>We believe cooking is an art that unites people, transcends cultural boundaries,
        and nurtures creativity. At FoodFusion, we strive to make cooking accessible, enjoyable, and innovative for everyone.</p>

      <h2>Our Team</h2>
      <div class="team-section">
        <div class="team-member">
          <img src="https://via.placeholder.com/150" alt="Team Member">
          <h3>John Doe</h3>
          <p>Founder & Head Chef</p>
        </div>
        <div class="team-member">
          <img src="https://via.placeholder.com/150" alt="Team Member">
          <h3>Jane Smith</h3>
          <p>Content Creator & Food Enthusiast</p>
        </div>
        <div class="team-member">
          <img src="https://via.placeholder.com/150" alt="Team Member">
          <h3>Emily Brown</h3>
          <p>Recipe Developer & Blogger</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="social-links">
      <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a>
    </div>
    <p>&copy; 2024 FoodFusion. All rights reserved.</p>
  </footer>
  <script src="scripts.js"></script>
</body>

</html>