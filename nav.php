<?php session_start(); ?>
<link rel="stylesheet" href="./styles/nav.css">

<div class="nav-header-container">
  <div class="header-text">Food Fusion</div>
  <div class="right-part">
    <div class="social-links">

    </div>
    <div class="account-status">

    </div>
  </div>
</div>

<div class="navbar">
  <div class="logo">
    <img src="./img/logo1.png" alt="Logo" id="js-logo">

  </div>
  <ul>
    <li><a href="./index.php" class="home">Home</a></li>

    <li><a href="./recipes.php" class="recipe">Recipes</a></li>
    <li><a href="./educational-resource.php" class="videos">Recipes</a></li>
    <li><a href="./community.php" class="community">Community</a></li>
    <li><a href="./about-us.php" class="about">About Us</a></li>
    <!-- // TODO: add username with SESSION in nav bar -->
  </ul>
  <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
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
    "Recipes": "recipes",
    "Videos": "videos",
    "Community": "community",
    "About": "about"
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
</script>