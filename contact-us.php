<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Contact Us</title>
  <link rel="shortcut icon" href="./img/logo1.png" type="image/x-icon">
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
        <form id="contact-form" action="submit_contact.php" method="POST">
          <label for="fullName">Full Name:</label>
          <input type="text" id="full-name" name="fullName" placeholder="Enter your full name" required>

          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="Enter your email address" required>

          <label for="type">Type:</label>
          <div class="custom-select">
            <select id="type" name="type" required>
              <option value="Request Form">Request Form</option>
              <option value="Feedback">Feedback</option>
            </select>
          </div>

          <label for="message">Message:</label>
          <textarea name="message" id="message" placeholder="Enter your message" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include('footer.php'); ?>
  <script src="./scripts/contact-us.js"></script>
</body>

</html>