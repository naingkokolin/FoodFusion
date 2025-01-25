<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Community Cookbook</title>
  <link rel="shortcut icon" href="./icons/icons8-community-16.png" type="image/x-icon">
  <link rel="stylesheet" href="./styles/community.css">
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
        <li><a href="community.html" class="active">Community</a></li>
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

  <!-- Community Cookbook Section -->
  <section id="community">
    <div class="container">
      <h1>Community Cookbook</h1>
      <p>Share your favorite recipes, tips, and culinary experiences with the FoodFusion community.</p>

      <!-- Share Recipe Form -->
      <div class="share-recipe">
        <h2>Share Your Recipe</h2>
        <form id="recipe-form">
          <label for="recipe-title">Recipe Title:</label>
          <input type="text" id="recipe-title" placeholder="Enter recipe title" required>

          <label for="recipe-description">Description:</label>
          <textarea id="recipe-description" placeholder="Enter recipe description" required></textarea>

          <label for="recipe-ingredients">Ingredients:</label>
          <textarea id="recipe-ingredients" placeholder="Enter ingredients" required></textarea>

          <label for="recipe-steps">Cooking Steps:</label>
          <textarea id="recipe-steps" placeholder="Enter cooking steps" required></textarea>

          <button type="submit">Share Your Idea</button>
        </form>
      </div>

      <!-- Recent Contributions -->
      <h2>Recent Contributions</h2>
      <div class="contributions">
        <!-- Example Recipe Card -->
        <div class="recipe-card">
          <h3>Classic Pancakes</h3>
          <p><strong>Description:</strong> Fluffy and golden pancakes that are perfect for breakfast.</p>
          <p><strong>Ingredients:</strong> Flour, eggs, milk, baking powder, sugar.</p>
          <p><strong>Steps:</strong> Mix ingredients, cook on a griddle, serve with syrup.</p>
        </div>
        <!-- Add more contributions as they are submitted -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  <!-- <footer>
    <div class="social-links">
      <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a>
    </div>
    <p>&copy; 2024 FoodFusion. All rights reserved.</p>
  </footer> -->
  <?php include("footer.php"); ?>

  <script src="./scripts/community.js"></script>
</body>

</html>