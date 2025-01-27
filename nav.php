<?php session_start(); ?>
<link rel="stylesheet" href="./styles/nav.css">

<div class="nav-header-container">
  <div class="header-text">Food Fusion</div>
  <img src="./img/logo1.png" alt="Logo" class="logo-img">
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
      <!-- // TODO: add username with SESSION in nav bar -->
    </ul>
  </div>
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
</script>