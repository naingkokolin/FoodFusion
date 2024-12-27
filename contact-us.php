<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - FoodFusion</title>
  <link rel="stylesheet" href="./styles/contact-us.css">
</head>

<body>
  <!-- Header -->
  <header>
    <!-- <nav>
      <div class="logo">FoodFusion</div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="recipes.html">Recipes</a></li>
        <li><a href="community.html">Community</a></li>
        <li><a href="contact.html" class="active">Contact Us</a></li>
      </ul>
      <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </nav> -->
    <?php include("navbar.php"); ?>
  </header>

  <!-- Contact Us Section -->
  <section id="contact-us">
    <div class="container">
      <h1>Contact Us</h1>
      <p>If you have any questions, feedback, or recipe requests, please fill out the form below.</p>

      <!-- Contact Form -->
      <div class="contact-form">
        <form id="contact-form">
          <label for="full-name">Full Name:</label>
          <input type="text" id="full-name" placeholder="Enter your full name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" placeholder="Enter your email address" required>

          <label for="message">Message:</label>
          <textarea id="message" placeholder="Enter your message" required></textarea>

          <button type="submit">Send Message</button>
        </form>
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

  <script src="./scripts/contact-us.js"></script>
</body>

</html>