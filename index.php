<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="page-title">Food Fusion</title>
  <!-- <link rel="stylesheet" href="./styles/design.css"> -->
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="icon" href="./img/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
  <!-- Cookies Consent -->
  <?php include('cookies-consent.php'); ?>

  <?php include 'nav.php'; ?>
  <script src="./scripts/home.js"></script>

  <div class="page-container">
    <!-- #region Join now Line -->

    <?php if (!isset($_SESSION['user'])): ?>
      <div class="join-container">
        <button class="join-btn" id="js-join-btn">Join Now</button>
        <div class="join-text">Join our Foodies Community Today!</div>
        <div class="login-text">Already a member? <span class="login-btn" id="js-login-btn">Log in</span></div>
      </div>
    <?php endif; ?>
    <!-- #endregion -->

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
          <div class="recipe-title">
            <?php echo htmlspecialchars($recipes[$random]['title']); ?>
          </div>
          <div class="recipe-description"><strong><?php echo htmlspecialchars($recipes[$random]['description']); ?></strong></div>
          <div class="recipe-ingredients">
            <strong>Ingredients:</strong><?php echo htmlspecialchars($recipes[$random]['ingredients']); ?>
          </div>
          <div class="recipe-instructions">
            <strong>Instruction:</strong><?php echo htmlspecialchars($recipes[$random]['instructions']); ?>
          </div>
          <div class="recipe-type">
            <strong>Cuisine Type: </strong><?php echo htmlspecialchars($recipes[$random]['cuisine_type']); ?>
          </div>
          <div class="recipe-dietary">
            <strong>Dietary Preferences: </strong><?php echo htmlspecialchars($recipes[$random]['dietary_preferences']); ?>
          </div>
        </div>
      </div>

      <div class="recipe-latest-cards">
        <div class="recipe-cards-text">The Lastest Recipe Cards</div>
        <?php for ($recipe = 1; $recipe <= 3; $recipe++):  ?>
          <div class="recipe-small-card">
            <?php $count = rand(0, count($recipes) - 1); ?>
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
    <?php $events = include('fetch_events.php'); ?>
    <div class="cooking-event-container">
      <button class="carousel-btn-prev" onclick="moveCarousel(-1)"><img src="./icons/icons8-less-than-50.png" alt="Left Arrow"></button>
      <div class="carousel" id="carousel">

        <?php for ($event = 0; $event < count($events); $event++): ?>
          <div class="card">
            <img src="<?php echo htmlspecialchars($events[$event]['image_path']); ?>" alt="<?php echo htmlspecialchars($events[$event]['title']); ?>">
            <div class="info">
              <h4><?php echo htmlspecialchars($events[$event]['title']); ?></h4>
              <p><?php echo htmlspecialchars($events[$event]['description']); ?></p>
              <div class="event-details">
                <p><strong>Date:</strong> <?php echo htmlspecialchars($events[$event]['date']); ?></p>
                <p><strong>Location:</strong> <?php echo htmlspecialchars($events[$event]['location']); ?></p>
              </div>
            </div>
          </div>
        <?php endfor; ?>

      </div>
      <button class="carousel-btn-next" onclick="moveCarousel(1)"><img src="./icons/icons8-greater-than-50.png" alt="Right Arrow"></button>
    </div>
    <!-- End of Cooking Events Section -->

    <!-- Modal (Sign Up and Login Form) -->
    <div class="modal" id="joinModal">
      <div class="modal-content">
        <span class="close-btn" id="closeBtn">&times;</span>
        <h2>Join FoodFusion</h2>

        <div class="form-tabs">
          <button class="tab-link active" id="signUpTab">Sign Up</button>
          <button class="tab-link" id="loginTab">Login</button>
        </div>

        <div class="form-container" id="signUpForm">
          <form action="./index.php" method="POST" id="signUpForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <div class="error" id="firstNameError"></div>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            <div class="error" id="lastNameError"></div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <div class="error" id="emailError"></div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
            <div class="password-reset" id="js-password-reset"></div>

            <button type="submit" name="signUp" id="signUpBtn" onclick="signUpCheck(event)">Sign Up</button>
          </form>
        </div>

        <div class="form-container" id="loginForm" style="display:none;">
          <form action="./index.php" method="POST" id="loginForm">
            <label for="loginEmail">Email:</label>
            <input type="email" id="loginEmail" name="loginEmail" required>
            <div class="error" id="loginEmailError"></div>

            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
            <div class="error" id="loginPasswordError"></div>
            <p class="fail-attempt" id="js-fail-attempt"></p>

            <button type="submit" name="login" id="loginBtn" onclick="loginCheck(event)">Login</button>
          </form>
        </div>
      </div>
    </div>

  </div> <!-- end of page container -->

  <?php include 'footer.php'; ?>

  <?php
  include('db.php');

  if (!isset($_SESSION['failed_attempts'])) {
    $_SESSION['failed_attempts'] = 0;
  }

  if (!isset($_SESSION['lockout_time'])) {
    $_SESSION['lockout_time'] = 0;
  }

  if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 0;
  }

  $lockoutTime = 180;
  $currentTime = time();

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

      // Verify password
      if (password_verify($password, $user['password'])) {
        // Login successful: Reset failed attempts and set session variables
        $_SESSION['failed_attempts'] = 0;
        $_SESSION['lockout_time'] = 0;
        $_SESSION['user'] = $user['firstname'];
        echo "<script>alert('Login successful!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        $_SESSION['user_id'] = $user['userID'];
      } else {
        // Login failed: Increment failed attempts
        $_SESSION['failed_attempts']++;

        if ($_SESSION['failed_attempts'] >= 3) {
          $remainingTime = $lockoutTime - ($currentTime - $lastAttempt);
          echo "<script>
            alert('Too many failed attempts. Try again in 3 minutes.');
            document.getElementById('js-fail-attempt').innerHTML = 'Too many failed attempts. Try again in 3 minutes.';
            document.getElementById('loginBtn').disabled = true;
            startCountdown($lockoutTime);
            console.log('start countdown');

            function startCountdown(remainingTime) {
              const failAttemptElement = document.getElementById('js-fail-attempt');
              const loginButton = document.getElementById('loginBtn');

              function updateCountdown() {
                if (remainingTime > 0) {
                  let minutes = Math.floor(remainingTime / 60);
                  let seconds = remainingTime % 60;

                  failAttemptElement.innerHTML = 'Too many failed attempts. Try again in ' + minutes + ' m: ' + seconds + ' s!';
                  remainingTime--;
                  setTimeout(updateCountdown, 1000);
                } else {
                  failAttemptElement.innerHTML = '';
                  loginButton.disabled = false; 
                  console.log('time up');
                  
                }
              }
              updateCountdown();
            }
            </script>";
          $lockoutTime = 0;
          $_SESSION['lockout_time'] = $currentTime;
          $_SESSION['failed_attempts'] = 0;
        } else {
          echo "<script>alert('Incorrect password!');</script>";
          echo "<script>window.location.href='index.php';</script>";
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
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT, ['cost' => 12]);

    // Insert new user into the database
    $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Signup successful!');
            window.location.href='index.php';</script>";
      $_SESSION['user'] = $firstName;

      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['userID'];
      }
    } else {
      echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
  }


  ?>
</body>

</html>