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
    <?php $recipes = include('fetch_recipes.php'); ?>
    <div class="container">
      <h1>Recipe Collection</h1>
      <p>Explore a curated selection of recipes categorized by cuisine, dietary preferences, and cooking difficulty.</p>

      <!-- Filters -->
      <div class="filters">
        <label for="cuisine">Cuisine:</label>
        <select id="cuisine">
          <option value="all">All</option>
          <option value="Italian">Italian</option>
          <option value="Indian">Indian</option>
          <option value="Japanese">Japanese</option>
          <option value="Thai">Thai</option>
          <option value="French">French</option>
          <option value="Russian">Russian</option>
          <option value="American">American</option>
          <option value="Mediterranean">Mediterranean</option>
          <option value="Fusion">Fusion</option>
        </select>

        <label for="diet">Dietary Preference:</label>
        <select id="diet">
          <option value="all">All</option>
          <option value="Vegetarian">Vegetarian</option>
          <option value="Vegan">Vegan</option>
          <option value="Non-Vegetarian">Non-Vegetarian</option>
        </select>

        <label for="difficulty">Difficulty:</label>
        <select id="difficulty">
          <option value="all">All</option>
          <option value="Easy">Easy</option>
          <option value="Medium">Medium</option>
          <option value="Hard">Hard</option>
        </select>
      </div>

      <!-- Recipe Cards -->
      <div class="recipe-grid">
        <?php foreach ($recipes as $recipe): ?>
          <div class="recipe-card"
            data-cuisine="<?php echo htmlspecialchars($recipe['cuisine_type']); ?>"
            data-diet="<?php echo htmlspecialchars($recipe['dietary_preferences']); ?>"
            data-difficulty="<?php echo htmlspecialchars($recipe['cooking_difficulty']); ?>">
            <img src="<?php echo htmlspecialchars($recipe['image_path']); ?>" alt="<?php echo htmlspecialchars($recipe['title']); ?>">
            <h3><?php echo htmlspecialchars($recipe['title']); ?></h3>
            <p><?php echo htmlspecialchars($recipe['description']); ?></p>
            <div class="recipe-details">
              <p><strong>Cuisine:</strong> <?php echo htmlspecialchars($recipe['cuisine_type']); ?></p>
              <p><strong>Diet:</strong> <?php echo htmlspecialchars($recipe['dietary_preferences']); ?></p>
              <p><strong>Difficulty:</strong> <?php echo htmlspecialchars($recipe['cooking_difficulty']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include("footer1.php"); ?>

  <script src="./scripts/recipes.js"></script>
</body>

</html>