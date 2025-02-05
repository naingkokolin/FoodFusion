<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Community Cookbook</title>
  <link rel="shortcut icon" href="./icons/icons8-community-16.png" type="image/x-icon">
  <link rel="stylesheet" href="./styles/community.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
      <div class="share-post">
        <h2>Share Your Recipe</h2>
        <form id="post-form" action="submit_post.php" method="POST">
          <label for="post-title">Recipe Title:</label>
          <input type="text" id="recipe-title" name="post-title" placeholder="Enter recipe title" required>

          <label for="post-description">Description:</label>
          <textarea id="post-description" name="post-description" placeholder="Enter recipe description" required></textarea>

          <label for="post-ingredients">Ingredients:</label>
          <textarea id="post-ingredients" name="post-ingredients" placeholder="Enter ingredients" required></textarea>

          <label for="post-steps">Cooking Steps:</label>
          <textarea id="post-steps" name="post-steps" placeholder="Enter cooking steps" required></textarea>

          <label for="post-image">Image:</label>
          <textarea name="post-image" id="post-image" placeholder="Enter the copy link for image" required></textarea>

          <button type="submit">Share Your Idea</button>
        </form>
      </div>

      <!-- Recent Contributions -->
      <h2>Recent Contributions</h2>
      <div class="contributions" id="contributions">
        
      </div>
    </div>
  </section>

  <?php include("footer1.php"); ?>

  <script src="./scripts/community.js"></script>
</body>

</html>