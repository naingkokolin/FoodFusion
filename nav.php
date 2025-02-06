<?php
session_start();
if (isset($_SESSION['user'])) {
  session_regenerate_id(true);
}
?>
<link rel="stylesheet" href="./styles/nav.css">

<div class="nav-header-container">

  <div class="header-logo-container">
    <div class="header-text">Food Fusion</div>
    <img src="./img/logo1.png" alt="Logo" class="logo-img">
  </div>

  <?php if (isset($_SESSION['user'])): ?>
    <div class="user-logout-container">
      <a href="./profile.php" class="user-name">
        <?php echo htmlspecialchars($_SESSION['user']); ?>
      </a>
      <a href="./logout.php" class="logout">Logout</a>
    </div>
  <?php endif; ?>
</div>

<div class="navbar">
  <div class="logo">
    <img src="./img/logo1.png" alt="Logo" id="js-logo">
  </div>
  <div>
    <ul>
      <li><a href="./index.php" class="home">Home</a></li>
      <li><a href="./about-us.php" class="about-us">About Us</a></li>
      <li><a href="./recipes.php" class="recipe">Recipes</a></li>
      <li><a href="./community.php" class="community">Community</a></li>
      <li><a href="./culinary-resource.php" class="culinary">Culinary Resource</a></li>
      <li><a href="./educational-resource.php" class="education">Educational Resource</a></li>
      <li><a href="./contact-us.php" class="contact">Contact Us</a></li>
    </ul>
  </div>
  <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
</div>

<div id="loading-spinner">
  <div class="spinner"></div>
</div>

<script>
  const logoBtn = document.getElementById('js-logo');
  logoBtn.addEventListener('click', () => {
    window.location.href = 'index.php';
  });

  function toggleMenu() {
    const menu = document.querySelector('.navbar ul');
    menu.classList.toggle('show');
  }

  let pages = {
    "Food Fusion": "home",
    "About Us": "about-us",
    "Recipe Collection": "recipe",
    "Community Cookbook": "community",
    "Culinary Resources": "culinary",
    "Educational Resources": "education",
    "Contact Us": "contact"
  };

  const pageTitle = document.querySelector('.page-title');
  const home = document.querySelector('.home');

  let titles = Object.entries(pages);

  titles.forEach(([key, value]) => {
    if (pageTitle.textContent === key) {
      let navElement = document.querySelector(`.${value}`);
      navElement.style.color = "red";
      navElement.style.fontWeight = 700;
    }
  });

  window.addEventListener('load', () => {
    document.getElementById('loading-spinner').style.display = 'none';
  });
</script>