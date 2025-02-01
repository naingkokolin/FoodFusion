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

  <div class="page-container">
    <!-- #region Join now Line -->
    <div class="join-container">
      <button class="join-btn" id="js-join-btn">Join Now</button>
      <div class="join-text">Join our Foodies Community Today!</div>
      <div class="login-text">Already a member? <span class="login-btn" id="js-login-btn">Log in</span></div>
    </div>
    <!-- #endregion -->

    <!-- // TODO: need to add News Feed -->

    <!-- #region Recipe Section -->
    <h2 class="title-texts">Integrated News Feed</h2>
    <?php
    $recipes = include('fetch_recipes.php');
    $random = rand(0, 9);
    ?>
    <div class="recipe-container">
      <div class="recipe-image-first">
        <img src="<?php echo htmlspecialchars($recipes[$random]['image_path']); ?>" alt="Recipe" class="recipe-main-image">
        <div class="recipe-detail">
          <div class="recipe-title">Spaghetti Carbonara</div>
          <div class="recipe-description">A classic Italian pasta dish.</div>
          <div class="recipe-ingredients">
            Spaghetti, eggs, Parmesan cheese, pancetta, garlic, black pepper
          </div>
        </div>
      </div>

      <div class="recipe-latest-cards">
        <div class="recipe-cards-text">The Lastest Recipe Cards</div>
        <?php for ($recipe = 1; $recipe <= 3; $recipe++):  ?>
          <div class="recipe-small-card">
            <?php $count = rand(1, 9); ?>
            <div><img src="<?php echo htmlspecialchars($recipes[$count]['image_path']); ?>" alt="Recipe Image"></div>
            <div class="card-detail">
              <div class="recipe-title"><?php echo htmlspecialchars($recipes[$count]['title']); ?></div>
              <div class="recipe-description"><?php echo htmlspecialchars($recipes[$count]['description']); ?></div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <div class="recipe-show-everything" onclick="location.href='./recipes.php'">
      <button id="js-recipe-show-everything" class="recipe-show-everything-btn">Show Me Everything</button>
    </div>
    <!-- #endregion of Recipe Section -->

    <!-- #region Pick of the week -->
    <div class="pick-container">
      <div class="pick-card">
        <h3>PICK OF THE WEEK</h3>
        <h2>Cozy White Bean Mushroom Stew</h2>
        <p>Cozy, creamy white bean and mushroom stew with potatoes and herbs. An easy 1 pot entry perfect for cooler weather, Vegan, gluten-free and SO delicious.</p>
        <h5>By Sara Dickerman and Marissa Lippert</h5>
        <button>VIEW RECIPE</button>
      </div>

      <div class="pick-image">
        <img src="https://minimalistbaker.com/wp-content/uploads/2022/12/Mushroom-stew-9.jpg" alt="image">
      </div>

    </div>
    <!-- #endregion of pick of the week -->

    <!-- Culinary Trend Section -->
    <h2>Culinary Trends...</h2>
    <div class="culinary-container">
      <?php $culinary_trends = include('fetch_culinary.php'); ?>
      <?php for ($trend = 0; $trend < count($culinary_trends); $trend++): ?>
        <div class="culinary-card">
          <div class="culinary-image">
            <img id="js-culinary-img" src="<?php echo htmlspecialchars($culinary_trends[$trend]['image_path']); ?>" alt="Culinary">
          </div>
          <div class="culinary-detail">
            <div id="js-culinary-name" class="culinary-name"><?php echo htmlspecialchars($culinary_trends[$trend]['trend_name']); ?></div>
            <div id="js-culinary-description" class="culinary-description"><?php echo htmlspecialchars($culinary_trends[$trend]['description']); ?></div>
          </div>
        </div>
      <?php endfor; ?>
      <button id="see-more-btn" class="see-more-btn">See More</button>
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
          <div><button class="about-us-see-more-btn" onclick="location.href='./about-us.php'">See More>>></button></div>
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

  // Handle Login Form Submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_EMAIL);
    $password = filter_input(
      INPUT_POST,
      'loginPassword',
      FILTER_SANITIZE_STRING
    );

    // Fetch user from the database
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();

      // Check if the user is locked out
      $lockoutTime = 180; // 3 minutes in seconds
      $currentTime = time();

      // Fetch failed login attempts
      $attemptsSql = "SELECT attempts, last_attempt FROM login_attempts WHERE email = '$email'";
      $attemptsResult = $conn->query($attemptsSql);

      if (
        $attemptsResult->num_rows > 0
      ) {
        $attemptsRow = $attemptsResult->fetch_assoc();
        $attempts = $attemptsRow['attempts'];
        $lastAttempt = $attemptsRow['last_attempt'];

        // Check if the user is locked out
        if ($attempts >= 3 && ($currentTime - $lastAttempt) < $lockoutTime) {
          $remainingTime = $lockoutTime - ($currentTime - $lastAttempt);
          echo "<script>
                        document.getElementById('js-fail-attempt').innerHTML = 'Too many failed attempts. Try again in ' + Math.floor($remainingTime / 60) + ' minutes ' + ($remainingTime % 60) + ' seconds.';
                        document.querySelector('#loginForm button[type=\"submit\"]').disabled = true;
                        startCountdown($remainingTime);
                      </script>";
          exit();
        }
      }

      // Verify password
      if (password_verify($password, $user['password'])) {
        // Login successful: Reset failed attempts and set session variables
        $conn->query("DELETE FROM login_attempts WHERE email = '$email'");
        $_SESSION['user'] = [
          'first_name' => $user['firstname'],
          'last_name' => $user['lastname'],
          'email' => $user['email']
        ];
        echo "<script>alert('Login successful!');</script>";
      } else {
        // Increment failed attempts
        if ($attemptsResult->num_rows > 0) {
          $conn->query("UPDATE login_attempts SET attempts = attempts + 1, last_attempt = $currentTime WHERE email = '$email'");
        } else {
          $conn->query("INSERT INTO login_attempts (email, attempts, last_attempt) VALUES ('$email', 1, $currentTime)");
        }

        // Check if the user is now locked out
        $attemptsSql = "SELECT attempts FROM login_attempts WHERE email = '$email'";
        $attemptsResult = $conn->query($attemptsSql);
        $attemptsRow = $attemptsResult->fetch_assoc();
        $attempts = $attemptsRow['attempts'];

        if ($attempts >= 3) {
          echo "<script>
                        document.getElementById('js-fail-attempt').innerHTML = 'Too many failed attempts. Try again in 3 minutes.';
                        document.querySelector('#loginForm button[type=\"submit\"]').disabled = true;
                        startCountdown($lockoutTime);
                      </script>";
        } else {
          echo "<script>alert('Incorrect password!');</script>";
        }
      }
    } else {
      echo "<script>alert('Email not registered!');</script>";
    }
  }

  // Handle Signup Form Submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signUp'])) {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);

    // Insert new user into the database
    $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Signup successful! Please login.');</script>";
    } else {
      echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
  }


  ?>

  <script src="./scripts/home.js"></script>
</body>

</html>