<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Educational Resources</title>
  <link rel="shortcut icon" href="./img/logo1.png" type="image/x-icon">
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
    <h1>Educational Resources</h1>
    <p>Enhance your cooking skills with downloadable PDF files, cooking tutorials, and instructional videos.</p>
  </header>

  <!-- Main Content -->
  <main>
    <section class="resource-category">
      <?php $pdfs = require 'fetch_resource_pdf.php'; ?>
      <h2>Downloadable PDF Files</h2>
      <div class="resource-grid">

        <?php for ($pdf = 0; $pdf < count($pdfs); $pdf++): ?>
          <div class="resource-card">
            <img src="<?php echo htmlspecialchars($pdfs[$pdf]['thumbnail_path']); ?>" alt="Recipe Card PDF">
            <h3><?php echo htmlspecialchars($pdfs[$pdf]['title']); ?></h3>
            <p><strong>Description: </strong><?php echo htmlspecialchars($pdfs[$pdf]['description']); ?></p>
            <a href="<?php echo htmlspecialchars($pdfs[$pdf]['file_path']); ?>" download class="download-btn">Download PDF</a>
          </div>
        <?php endfor; ?>

      </div>
    </section>

    <section class="resource-category">
      <?php $videos = require('fetch_resource_video.php'); ?>
      <h2>Culinary Resources</h2>
      <div class="resource-grid">

        <?php for ($video = 0; $video < count($videos); $video++): ?>
          <div class="resource-card">
            <video controls>
              <source src="./<?php echo htmlspecialchars($videos[$video]['file_path']); ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <h3><?php echo htmlspecialchars($videos[$video]['title']); ?></h3>
            <p><strong>Description: </strong><?php echo htmlspecialchars($videos[$video]['description']); ?></p>
            <a href="<?php echo htmlspecialchars($videos[$video]['file_path']); ?>" download class="download-btn">Download Video</a>
          </div>
        <?php endfor; ?>

      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <script src="./scripts/culinary-resource.js"></script>
</body>

</html>