<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Recipe Collection</title>
  <link rel="shortcut icon" href="./icons/icons8-recipe-16 (1).png" type="image/x-icon">
  <link rel="stylesheet" href="./styles/recipes.css">
</head>

<body>
  <!-- Header -->
  <header>
    <?php include("nav.php"); ?>
  </header>

  <!-- Recipe Collection Section -->
  <section id="recipes">
    <div class="container">
      <h1>Recipe Collection</h1>
      <p>Explore a curated selection of recipes categorized by cuisine, dietary preferences, and cooking difficulty.</p>

      <!-- Filters -->
      <div class="filters">
        <label for="cuisine">Cuisine:</label>
        <select id="cuisine">
          <option value="all">All</option>
          <option value="italian">Italian</option>
          <option value="indian">Indian</option>
          <option value="japanese">Japanese</option>
          <option value="mexican">Mexican</option>
        </select>

        <label for="diet">Dietary Preference:</label>
        <select id="diet">
          <option value="all">All</option>
          <option value="vegetarian">Vegetarian</option>
          <option value="vegan">Vegan</option>
          <option value="gluten-free">Gluten-Free</option>
        </select>

        <label for="difficulty">Difficulty:</label>
        <select id="difficulty">
          <option value="all">All</option>
          <option value="easy">Easy</option>
          <option value="medium">Medium</option>
          <option value="hard">Hard</option>
        </select>
      </div>

      <!-- Recipe Cards -->
      <div class="recipe-grid">
        <!-- Example Recipe Card -->
        <div class="recipe-card" data-cuisine="italian" data-diet="vegetarian" data-difficulty="easy">
          <img src="https://via.placeholder.com/300x200" alt="Recipe Image">
          <h3>Classic Margherita Pizza</h3>
          <p>Italian | Vegetarian | Easy</p>
        </div>
        <div class="recipe-card" data-cuisine="indian" data-diet="vegan" data-difficulty="medium">
          <img src="https://via.placeholder.com/300x200" alt="Recipe Image">
          <h3>Spicy Lentil Curry</h3>
          <p>Indian | Vegan | Medium</p>
        </div>
        <!-- Add more recipe cards as needed -->
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

  <script src="./scripts/recipes.js"></script>
</body>

</html>