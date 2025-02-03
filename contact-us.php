<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Contact Us</title>
  <link rel="shortcut icon" href="./icons/icons8-contact-16.png" type="image/x-icon">
  <link rel="stylesheet" href="./styles/contact-us.css">
</head>

<body>
  <!-- Header -->
  <header>
    <?php include("nav.php"); ?>
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
  <?php include('footer1.php'); ?>
  <script src="./scripts/contact-us.js"></script>
</body>

</html>