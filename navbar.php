<link rel="stylesheet" href="./styles/navbar.css">

<nav class="navbar">
  <div class="logo">
    <img src="./img/logo.png" alt="Logo">
    Food Fusion
  </div>
  <ul>
    <li><a href="./index.php" class="home">Home</a></li>
    <li><a href="./about-us.php" class="about-us">About Us</a></li>
    <li><a href="./recipes.php" class="recipe">Recipes</a></li>
    <li><a href="./community.php" class="community">Community</a></li>
    <li><a href="./culinary-resource.php" class="culinary">Culinary Resource</a></li>
    <li><a href="./contact-us.php" class="contact">Contact Us</a></li>
    <button id="js-join-btn"></button>
  </ul>
  <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
</nav>

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
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="signUp">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Sign Up</button>
      </form>
    </div>

    <!-- Login Form -->
    <div class="form-container" id="loginForm" style="display:none;">
      <form action="#" method="POST" id="login">
        <label for="loginEmail">Email:</label>
        <input type="email" id="loginEmail" name="loginEmail" required>

        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required>

        <button type="submit">Login</button>
      </form>
    </div>
  </div>
</div>

<script>

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

<?php
  if (isset($_SESSION['user'])) {
    echo "document.getElementById('js-join-btn').textContent = '$user';";
  } else {
    echo "document.getElementById('js-join-btn').textContent = 'Join';";
  }
?>

const jsJoinBtn = document.getElementById("js-join-btn");
const joinUsBtn = document.getElementById('join-us-btn');
const joinPopup = document.getElementById('join-popup');
const closePopupBtn = document.getElementById('close-popup');

const modal = document.getElementById('joinModal');
// const joinBtn = document.getElementById('joinBtn');
const closeBtn = document.getElementById('closeBtn');
const signUpTab = document.getElementById('signUpTab');
const loginTab = document.getElementById('loginTab');
const signUpForm = document.getElementById('signUpForm');
const loginForm = document.getElementById('loginForm');

// Open modal when "Join Us" is clicked
joinUsBtn.addEventListener('click', () => {
  modal.style.display = 'block';
});

// Close modal when "X" is clicked
closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Close modal if clicked outside of the modal content
window.addEventListener('click', (e) => {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    alert("Hi");
  }
});

// Switch to Sign Up form
signUpTab.addEventListener('click', () => {
  signUpForm.style.display = 'block';
  loginForm.style.display = 'none';
  signUpTab.classList.add('active');
  loginTab.classList.remove('active');
});

// Switch to Login form
loginTab.addEventListener('click', () => {
  signUpForm.style.display = 'none';
  loginForm.style.display = 'block';
  loginTab.classList.add('active');
  signUpTab.classList.remove('active');
});

joinBtn.addEventListener('click', () => {
  if (joinBtn.textContent === 'Join') {
    // window.location.href = './login.php';
    document.querySelector('.js-joinModal').style.display = 'block';
    alert('Please login to join the community!');
  } else {
    window.location.href = './profile.php';
  }
});

jsJoinBtn.addEventListener('click', () => {
  console.log("HIIIIIIIIIII");
});
</script>