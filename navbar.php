<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #fff8ce;
    color: black;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10;
  }

  .navbar .logo {
    font-size: 24px;
    font-weight: bold;
    flex-grow: 1;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  }

  .navbar .logo img {
    height: 30px;
  }

  .navbar ul {
    display: flex;
    list-style-type: none;
  }

  .navbar ul li {
    margin: 0 15px;
  }

  .navbar ul li a {
    text-decoration: none;
    color: black;
    display: flex;
    align-items: center;
    transition: all 0.15s;
  }

  .navbar ul li a:hover {
    color: #ff6347;
    /* transform: rotate(360deg); */
    transform: translate(0px, 1px);
  }

  .navbar ul li a i {
    margin-right: 8px;
  }

  .navbar .menu-toggle {
    display: none;
    font-size: 24px;
    cursor: pointer;
  }

  @media (max-width: 768px) {
    .navbar ul {
      display: none;
      flex-direction: column;
      background-color: #fff8ce;
      position: absolute;
      top: 60px;
      right: 20px;
      width: 200px;
      border-radius: 5px;
      overflow: hidden;
    }

    .navbar ul.show {
      display: flex;
    }

    .navbar .menu-toggle {
      display: block;
    }
  }
</style>

<nav class="navbar">
  <div class="logo">
    <img src="./img/logo.png" alt="Logo">
    Food Fusion
  </div>
  <ul>
    <li><a href="./home.php" class="home">Home</a></li>
    <li><a href="./about-us.php" class="about-us">About Us</a></li>
    <li><a href="./recipes.php" class="recipe">Recipes</a></li>
    <li><a href="./community.php" class="community">Community</a></li>
    <li><a href="./culinary-resource.php" class="culinary">Culinary Resource</a></li>
    <li><a href="./contact-us.php" class="contact">Contact Us</a></li>
  </ul>
  <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
</nav>

<script>
  function toggleMenu() {
    const menu = document.querySelector('.navbar ul');
    menu.classList.toggle('show');
  }

  // let pages = ["FoodFusion", "About Us", "Recipe Collection", "Community Cookbook", "Culinary Resources", "Contact Us"];
  let pages = {
    "FoodFusion": "home",
    "About Us": "about-us",
    "Recipe Collection": "recipe",
    "Community Cookbook": "community",
    "Culinary Resources": "culinary",
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
      navElement.style.fontStyle = "italic";
    }
  })
</script>