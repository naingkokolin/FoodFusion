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
            background-color: #333;
            color: white;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
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
            color: white;
            display: flex;
            align-items: center;
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
                background-color: #333;
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
  <div class="logo">Food Fusion</div>
  <ul>
      <li><a href="#"><i>&#127860;</i> Home</a></li>
      <li><a href="#"><i>&#127860;</i> Recipes</a></li>
      <li><a href="#"><i>&#127860;</i> Tips</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"><i>&#127860;</i> Community</a></li>
      <li><a href="#"><i>&#127860;</i> Contact</a></li>
  </ul>
  <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
</nav>

<script>
  function toggleMenu() {
      const menu = document.querySelector('.navbar ul');
      menu.classList.toggle('show');
  }
</script>