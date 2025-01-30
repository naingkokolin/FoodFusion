<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Food Fusion</title>
  <link rel="stylesheet" href="./styles/design.css">
  <!-- <link rel="stylesheet" href="./styles/style.css"> -->
  <link rel="icon" href="./icons/icons8-home-16.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
  <?php include 'nav.php'; ?>
  <div id="loading-spinner">
    <div class="spinner"></div>
  </div>

  <div class="page-container">
    <!-- Join now Line -->
    <div class="join-container">
      <button class="join-btn" id="js-join-btn">Join Now</button>
      <div class="join-text">Join our Foodies Community Today!</div>
      <div class="login-text">Already a member? <span class="login-btn" id="js-login-btn">Log in</span></div>
    </div>
    <!-- End of Join now -->

    <!-- // TODO: need to add News Feed -->

    <!-- Recipe Section -->
    <h2 class="title-texts">Integrated News Feed</h2>
    <div class="recipe-container">
      <div class="recipe-image-first">
        <img src="https://stefaniaskitchenette.com/wp-content/uploads/2024/07/Carbonara-5.webp" alt="image">
        <div class="recipe-detail">
          <div class="recipe-title">Ultimate spaghetti carbonara recipe</div>
          <div class="recipe-description">Discover how to make traditional spaghetti carbonara. This classic Italian pasta dish combines a silky cheese sauce with crisp pancetta and black pepper.</div>
        </div>
      </div>

      <div class="recipe-latest-cards">

        <div>The Lastest Recipe Cards</div>
        <div class="recipe-small-card">
          <div><img src="./img/01.jpg" alt=""></div>
          <div class="card-detail">
            <div>Title</div>
            <div>Description</div>
          </div>
        </div>

        <div class="recipe-small-card">
          <div><img src="./img/01.jpg" alt=""></div>
          <div class="card-detail">
            <div>Title</div>
            <div>Description</div>
          </div>
        </div>

        <div class="recipe-small-card">
          <div><img src="./img/01.jpg" alt=""></div>
          <div class="card-detail">
            <div>Title</div>
            <div>Description</div>
          </div>
        </div>
      </div>
    </div>
    <div class="recipe-show-everything" onclick="location.href='./recipes.php'">
      <button id="js-recipe-show-everything" class="recipe-show-everything-btn">Show Me Everything</button>
    </div> <!-- End of Recipe Section -->

    <!-- Pick of the week -->
    <div class="pick-container">
      <div class="pick-card">
        <h3>PICK OF THE WEEK</h3>
        <h2>Cozy White Bean Mushroom Stew</h2>
        <p>Cozy, creamy white bean and mushroom stew with potatoes and herbs. An easy 1 pot entry perfect for cooler weather, Vegan, gluten-free and SO delicious.</p>
        <h5>By Sara Dickerman and Marissa Lippert</h5>
        <button>VIEW RECIPE</button>
      </div>

      <div class="pick-image">
        <img src="./img/01.jpg" alt="image">
      </div>

    </div> <!-- End of pick of the week -->

    <!-- Culinary Trend Section -->
    <div class="culinary-container">
      <div class="culinary-card">
        <div class="culinary-image">
          <img src="./img/a-02.png" alt="Culinary">
        </div>
        <div class="culinary-detail">
          <div class="culinary-type">Soup</div>
          <div class="culinary-name">Tomato Soup</div>
          <button>See Detail</button>
        </div>
      </div>

      <div class="culinary-card">
        <div class="culinary-image">
          <img src="./img/a-02.png" alt="Culinary">
        </div>
        <div class="culinary-detail">
          <div class="culinary-type">Soup</div>
          <div class="culinary-name">Tomato Soup</div>
          <button>See Detail</button>
        </div>
      </div>

      <div class="culinary-card">
        <div class="culinary-image">
          <img src="./img/a-02.png" alt="Culinary">
        </div>
        <div class="culinary-detail">
          <div class="culinary-type">Soup</div>
          <div class="culinary-name">Tomato Soup</div>
          <button>See Detail</button>
        </div>
      </div>

      <div class="culinary-card">
        <div class="culinary-image">
          <img src="./img/a-02.png" alt="Culinary">
        </div>
        <div class="culinary-detail">
          <div class="culinary-type">Soup</div>
          <div class="culinary-name">Tomato Soup</div>
          <button>See Detail</button>
        </div>
      </div>

    </div>
    <!-- End of Culinary Trend Section -->

    <!-- Brief Indroduction Section -->
    <div class="intro-container">
      <div class="big-logo">
        <h3>WHO WE ARE?</h3>
        <img src="./img/logo1.png" alt="Logo">
        <p>
          FoodFusion is a culinary platform dedicated to promoting home cooking and culinary creativity among food enthusiasts. We provide a central hub for sharing recipes, culinary tips, and fostering a vibrant food community.
        </p>
      </div>
      <div class="brief-intro-container">
        <div class="intro-header">
          <div>
            <h4>A Brief Introduction</h4>
          </div>
          <div><button class="see-more-btn" onclick="location.href='./about-us.php'">See More>>></button></div>
        </div>
        <div class="team-member">
          <div class="member-card">
            <div class="member-image">
              <img src="./img/nkkl.jpg" alt="Team Member">
            </div>
            <div class="member-brief">Founder & Content Creator</div>
          </div>
          <div class="member-card">
            <div class="member-image"><img src="./img/julia2.jpg" alt="Team Member"></div>
            <div class="member-brief">Head Chef & Page Designer</div>
          </div>
        </div>

        <div class="cross-line-container">
          <div class="cross-line">FoodFusion by the Numbers</div>
        </div>

        <div class="intro-body">
          <div class="intro-fact">
            <div class="intro-h">Founded in 2020</div>
            <div class="intro-t">Publishing food & nutrition advice for 4+ years</div>
          </div>
          <div class="intro-fact">
            <div class="intro-h">Healthy Recipes</div>
            <div class="intro-t">Providing healthy recipes for the customers</div>
          </div>
          <div class="intro-fact">
            <div class="intro-h">Culinary Trends</div>
            <div class="intro-t">Supporting the culinary trends from all over the world</div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Brief Indroduction Section -->

    <!-- Upcoming Cooking Events Section  -->
    <h2 class="cooking-event-header">Upcoming Cooking Events</h2>
    <div class="cooking-event-container">
      <button class="carousel-btn-prev" onclick="moveCarousel(-1)"><img src="./icons/icons8-less-than-50.png" alt="Left Arrow"></button>
      <div class="carousel" id="carousel">
        <div class="card">
          <img src="https://via.placeholder.com/250x150" alt="">
          <div class="info">
            <h4>The Goof-Proof Way to Proof Yeast</h4>
            <p>By Julia Yang</p>
          </div>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/250x150" alt="">
          <div class="info">
            <h4>How to Mince Garlic 6 Ways</h4>
            <p>By Julia Yang</p>
          </div>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/250x150" alt="">
          <div class="info">
            <h4>How to Make Buttermilk</h4>
            <p>By Julia Yang</p>
          </div>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/250x150" alt="">
          <div class="info">
            <h4>How to Measure Flour Correctly</h4>
            <p>By Julia Yang</p>
          </div>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/250x150" alt="">
          <div class="info">
            <h4>How to Measure Flour Correctly</h4>
            <p>By Julia Yang</p>
          </div>
        </div>
      </div>
      <button class="carousel-btn-next" onclick="moveCarousel(1)"><img src="./icons/icons8-greater-than-50.png" alt="Right Arrow"></button>
    </div>
    <!-- End of Cooking Events Section -->

    <!-- Modal (Sign Up and Login Form) -->
    <div class="modal" id="joinModal">
      <div class="modal-content">
        <span class="close-btn" id="closeBtn">&times;</span>
        <h2>Join FoodFusion</h2>
        <!-- Tabs for Sign Up and Login -->
        <div class="form-tabs">
          <button class="tab-link active" id="signUpTab">Sign Up</button>
          <button class="tab-link" id="loginTab">Login</button>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container" id="signUpForm">
          <form action="./index.php" method="POST" id="signUp">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="signUp">Sign Up</button>
          </form>
        </div>

        <!-- Login Form -->
        <div class="form-container" id="loginForm" style="display:none;">
          <form action="./index.php" method="POST" id="login">
            <label for="loginEmail">Email:</label>
            <input type="email" id="loginEmail" name="loginEmail" required>

            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
            <p class="fail-attempt" id="js-fail-attempt"></p>

            <button type="submit" name="login">Login</button>
          </form>
        </div>
      </div>
    </div>

  </div> <!-- end of page container -->

  <!-- // TODO: ADD FOOTER -->
  <?php include 'footer.php'; ?>

  <?php
  include('db.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "root", "", "foodfusion");

    // Check connection
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }

    $showLgoinForm = false;
    $lockoutMessage = "";

    // For Sign Up
    if (isset($_POST["signUp"])) {
      $firstName = htmlspecialchars($_POST["firstName"]);
      $lastName = htmlspecialchars($_POST["lastName"]);
      $email = htmlspecialchars($_POST["email"]);
      $password = htmlspecialchars($_POST["password"]);

      $checkEmail = "SELECT * FROM user WHERE email = '$email'";
      $result = $conn->query($checkEmail);

      if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered!');</script>";
      } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('New record created successfully');</script>";
        } else {
          echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
      }
    }

    // For Login
    if (isset($_POST["login"])) {
      $email = htmlspecialchars($_POST["loginEmail"]);
      $password = htmlspecialchars($_POST["loginPassword"]);

      $checkAttempts = "SELECT * FROM login_attempts WHERE email = '$email'";
      $attemptsResult = $conn->query($checkAttempts);

      $query = $conn->prepare("SELECT attempts, last_attempt FROM fail_login_attempts WHERE email = ?");
      $query->bind_param("s", $loginEmail);
      $query->execute();
      $result = $query->get_result();

      $lockoutDuration = 180;
      $currentTime = time();

      if ($attemptsResult->num_rows > 0) {
        $attemptsRow = $attemptsResult->fetch_assoc();

        if ($attemptsRow['attempts'] >= 5) {
          echo "<script>alert('Too many failed login attempts. Try again later.');</script>";
          exit();
        }
      } else {
        $conn->query("INSERT INTO login_attempts (email, attempts) VALUES ('$email', 0)");
      }

      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $failAttempts = $row['fail_attempts'];
        if (password_verify($password, $row['password'])) {
          $conn->query("UPDATE login_attempts SET attempts = 0 WHERE email = '$email'");
          echo "<script>alert('Login successful');</script>";
        } else {
          $conn->query("UPDATE login_attempts SET attempts = attempts + 1 WHERE email = '$email'");
          echo "<script>alert('Incorrect password');</script>";
          $showLgoinForm = true;
        }
      } else {
        echo "<script>alert('Email not registered');</script>";
        $showLgoinForm = true;
      }
    }
    $conn->close();
  }
  ?>

  <script src="./scripts/home.js"></script>
</body>

</html>

<!-- 
To inspire and empower individuals to embrace home cooking and culinary
creativity by providing a vibrant platform for sharing recipes, culinary tips,
and fostering a supportive community of food enthusiasts worldwide.      
-->