<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Culinary Resources</title>
  <link rel="shortcut icon" href="./icons/icons8-cooking-16.png" type="image/x-icon">
  <link rel="stylesheet" href="./styles/culinary-resource.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <header>
    <?php include("nav.php"); ?>
  </header>

  <!-- Culinary Resources Section -->
  <header>
    <h1>Culinary Resources</h1>
    <p>Enhance your cooking skills with downloadable recipe cards, cooking tutorials, and instructional videos.</p>
  </header>

  <!-- Main Content -->
  <main>
    <section class="resource-category">
      <h2>Downloadable Recipe Cards</h2>
      <div class="resource-grid">
        <div class="resource-card">
          <img src="images/pancakes.jpg" alt="Classic Pancakes">
          <h3>Classic Pancakes</h3>
          <a href="downloads/pancakes.pdf" download class="download-btn">Download PDF</a>
        </div>
        <div class="resource-card">
          <img src="images/pizza-dough.jpg" alt="Homemade Pizza Dough">
          <h3>Homemade Pizza Dough</h3>
          <a href="downloads/pizza-dough.pdf" download class="download-btn">Download PDF</a>
        </div>
        <div class="resource-card">
          <img src="images/stir-fry.jpg" alt="Vegetarian Stir Fry">
          <h3>Vegetarian Stir Fry</h3>
          <a href="downloads/stir-fry.pdf" download class="download-btn">Download PDF</a>
        </div>
      </div>
    </section>

    <section class="resource-category">
      <h2>Cooking Tutorials</h2>
      <div class="resource-grid">
        <div class="resource-card">
          <video controls>
            <source src="videos/knife-skills.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3>Knife Skills Tutorial</h3>
          <a href="downloads/knife-skills.mp4" download class="download-btn">Download Video</a>
        </div>
        <div class="resource-card">
          <video controls>
            <source src="videos/omelette.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3>Perfect Omelette</h3>
          <a href="downloads/omelette.mp4" download class="download-btn">Download Video</a>
        </div>
        <div class="resource-card">
          <video controls>
            <source src="videos/baking-tips.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3>Baking Tips</h3>
          <a href="downloads/baking-tips.mp4" download class="download-btn">Download Video</a>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
   <?php include("footer.php"); ?>

  <script src="./scripts/culinary-resource.js"></script>
</body>

</html>