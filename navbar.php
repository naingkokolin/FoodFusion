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
  }

  .navbar .logo {
    font-size: 24px;
    font-weight: bold;
    flex: 1;
    display: flex;
    flex-direction: row;
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
  }

  .navbar ul li a:hover {
    font-style: italic;
    text-shadow: 1px 1px rgb(87, 90, 86);
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
    <img src="/img/logo.png" alt="Logo">
    Food Fusion
  </div>
  <ul>
    <li><a href="./home.php"><i>&#127860;</i> Home</a></li>
    <li><a href="./about-us.php"><i>&#127860;</i> About Us</a></li>
    <li><a href="./recipes.php"><i>&#127860;</i> Recipes</a></li>
    <li><a href="./community.php"><i>&#127860;</i> Community</a></li>
    <li><a href="./culinary-resource.php"><i>&#127860;</i> Culinary Resource</a></li>
    <li><a href="./contact-us.php"><i>&#127860;</i> Contact Us</a></li>
  </ul>
  <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
</nav>

<script>
  function toggleMenu() {
    const menu = document.querySelector('.navbar ul');
    menu.classList.toggle('show');
  }
</script>