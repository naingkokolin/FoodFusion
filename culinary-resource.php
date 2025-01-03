<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Culinary Resources</title>
  <link rel="stylesheet" href="./styles/culinary-resource.css">
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
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="resources.html" class="active">Culinary Resources</a></li>
      </ul>
      <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </nav> -->
    <?php include("navbar.php"); ?>
  </header>

  <!-- Culinary Resources Section -->
  <section id="resources">
    <div class="container">
      <h1>Culinary Resources</h1>
      <p>Enhance your cooking skills with downloadable recipe cards, cooking tutorials, and instructional videos.</p>

      <!-- Downloadable Recipe Cards -->
      <div class="resources-category">
        <h2>Recipe Cards</h2>
        <ul>
          <li><a href="#">Classic Pancakes Recipe Card (PDF)</a></li>
          <li><a href="#">Homemade Pizza Dough Recipe Card (PDF)</a></li>
          <li><a href="#">Vegetarian Stir Fry Recipe Card (PDF)</a></li>
        </ul>
      </div>

      <!-- Cooking Tutorials -->
      <div class="resources-category">
        <h2>Cooking Tutorials</h2>
        <ul>
          <li><a href="#">Knife Skills Tutorial (Video)</a></li>
          <li><a href="#">How to Make the Perfect Omelette (Video)</a></li>
          <li><a href="#">Baking Tips for Beginners (Video)</a></li>
        </ul>
      </div>

      <!-- Kitchen Hacks -->
      <div class="resources-category">
        <h2>Kitchen Hacks</h2>
        <ul>
          <li><a href="#">How to Save Time in the Kitchen (Article)</a></li>
          <li><a href="#">Tips for Organizing Your Kitchen (Article)</a></li>
          <li><a href="#">How to Use Leftovers Creatively (Article)</a></li>
        </ul>
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

  <script src="./scripts/culinary-resource.js"></script>
</body>

</html>