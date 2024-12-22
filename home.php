<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="/styles/home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <title>Home Page</title>
</head>

<body>

  <!-- <div class="header-section">
    
    <div class="logo-container">
      <img src="/img/logo.png" alt="Logo">
      <h3>Food Fusion</h3>
    </div>

     <div class="navigation-container">
      
     </div>

  </div> -->
  <?php include("navbar.php") ?>

  <div class="main-section">
    <div class="image-text">
      <div class="image-inside-main">
        <img src="./img/70bc81c8-b277-407d-8c3a-5c1a3e501732-4-hamburger.jpg" alt="">
      </div>
      <div class="text">
        <p>
          "To inspire and empower individuals to embrace home cooking and culinary creativity by providing a vibrant platform for sharing recipes, culinary tips, and fostering a supportive community of food enthusiasts worldwide."
        </p>

        <div class="join-us-button">
          <a href="./login-form.php">
            <button>
              Join Us
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Cookie consent bar -->
  <div id="cookie-consent-bar">
    <span>This website uses cookies to ensure you get the best experience. Do you accept?</span>
    <button id="accept-cookies">Accept</button>
    <button id="decline-cookies">Decline</button>
  </div>

  <script>
    // Show cookie consent bar if no consent cookie exists
    window.onload = function() {
      if (!document.cookie.includes('cookie_consent')) {
        document.getElementById('cookie-consent-bar').style.display = 'block';
      }
    };

    // Handle cookie acceptance
    document.getElementById('accept-cookies').addEventListener('click', function() {
      document.cookie = "cookie_consent=accepted; path=/; max-age=" + (60 * 60 * 24 * 30); // 30 days
      document.getElementById('cookie-consent-bar').style.display = 'none';
    });

    // Handle cookie rejection
    document.getElementById('decline-cookies').addEventListener('click', function() {
      document.cookie = "cookie_consent=declined; path=/; max-age=" + (60 * 60 * 24 * 30); // 30 days
      document.getElementById('cookie-consent-bar').style.display = 'none';
    });
  </script>

  <?php
  if (isset($_COOKIE['cookie_consent'])) {
    $consent = $_COOKIE['cookie_consent'];
    if ($consent === 'accepted') {
      // Load analytics or other features requiring cookies
      echo "<!-- User accepted cookies. Load additional scripts here. -->";
    } else {
      // Do not load any cookies or tracking scripts
      echo "<!-- User declined cookies. -->";
    }
  }
  ?>


</body>

</html>