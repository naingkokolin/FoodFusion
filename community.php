<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Community Cookbook</title>
  <link rel="shortcut icon" href="./icons/icons8-community-16.png" type="image/x-icon">
  <link rel="stylesheet" href="./styles/community.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <!-- Header -->
  <header>
    <?php include("nav.php"); ?>
  </header>

  <!-- Community Cookbook Section -->
  <section id="community">
    <div class="container">
      <h1>Community Cookbook</h1>
      <p>Share your favorite recipes, tips, and culinary experiences with the FoodFusion community.</p>

      <!-- Share Recipe Form -->
      <div class="share-recipe">
        <h2>Share Your Recipe</h2>
        <form id="recipe-form" action="submit_recipe.php" method="POST">
          <label for="recipe-title">Recipe Title:</label>
          <input type="text" id="recipe-title" name="recipe-title" placeholder="Enter recipe title" required>

          <label for="recipe-description">Description:</label>
          <textarea id="recipe-description" name="recipe-description" placeholder="Enter recipe description" required></textarea>

          <label for="recipe-ingredients">Ingredients:</label>
          <textarea id="recipe-ingredients" name="recipe-ingredients" placeholder="Enter ingredients" required></textarea>

          <label for="recipe-steps">Cooking Steps:</label>
          <textarea id="recipe-steps" name="recipe-steps" placeholder="Enter cooking steps" required></textarea>

          <button type="submit">Share Your Idea</button>
        </form>
      </div>

      <!-- Recent Contributions -->
      <h2>Recent Contributions</h2>
      <div class="contributions" id="contributions">
        <!-- Posts will be dynamically loaded here -->
      </div>
    </div>
  </section>

  <?php include("footer1.php"); ?>

  <script src="./scripts/community.js"></script>
</body>

</html>