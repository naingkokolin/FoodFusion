<?php

if (!isset($_COOKIE['cookie_accepted'])) {
  $showBanner = true;
} else {
  $showBanner = false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accept_cookies'])) {
  setcookie('cookie_accepted', 'true', time() + (86400 * 30), "/");
  $showBanner = false;
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Consent</title>
  <style>
    #cookie-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      padding: 20px;
      text-align: center;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      transition: opacity 0.5s ease-in-out;
      opacity: 1;
    }

    #cookie-banner.hidden {
      opacity: 0;
      pointer-events: none;
    }

    #cookie-banner p {
      margin-bottom: 10px;
      max-width: 800px;
    }

    #cookie-banner button {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    #cookie-banner button:hover {
      background-color: #0056b3;
    }

    a {
      color: #ff6347;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      #cookie-banner p {
        font-size: 14px;
      }

      #cookie-banner button {
        font-size: 14px;
        padding: 8px 16px;
      }
    }
  </style>
</head>

<body>
  <?php if ($showBanner): ?>
    <div id="cookie-banner">
      <p>This website uses cookies to ensure you get the best experience on our website. <a href="./cookies-policy.php">Learn more</a></p>
      <form method="POST" action="">
        <button type="submit" name="accept_cookies">Accept Cookies</button>
      </form>
    </div>
  <?php endif; ?>

  <script>
    const cookieBanner = document.getElementById('cookie-banner');

    function acceptCookies() {
      localStorage.setItem('cookie_accepted', 'true');
      cookieBanner.classList.add('hidden');
    }

    window.addEventListener('DOMContentLoaded', () => {
      if (localStorage.getItem('cookie_accepted') === 'true') {
        cookieBanner.classList.add('hidden');
      }
    });
  </script>
</body>

</html>