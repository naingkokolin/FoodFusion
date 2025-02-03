document.addEventListener('DOMContentLoaded', () => {
  // Cookie Consent
  const cookieConsent = document.getElementById('cookie-consent');
  const acceptCookiesBtn = document.getElementById('accept-cookies');

  const seeMoreBtn = document.getElementById('see-more-btn');
  const culinaryCards = document.querySelectorAll('.culinary-card');

  const ls = localStorage.getItem('first-visit');

  if (acceptCookiesBtn && cookieConsent) {
    acceptCookiesBtn.addEventListener('click', () => {
      localStorage.setItem('first-visit', false);
      cookieConsent.style.display = 'none';
    });

    if (ls) cookieConsent.style.display = 'none';
  }

  // Modal and Login/Signup Functionality
  const jsJoinBtn = document.getElementById('js-join-btn');
  const loginBtn = document.getElementById('js-login-btn');
  const modal = document.getElementById('joinModal');
  const closeBtn = document.getElementById('closeBtn');
  const signUpTab = document.getElementById('signUpTab');
  const loginTab = document.getElementById('loginTab');

  // Open modal for Sign Up
  jsJoinBtn.addEventListener('click', () => {
    modal.style.display = 'block';
    signUp();
  });

  // Open modal for Login
  loginBtn.addEventListener('click', () => {
    modal.style.display = 'block';
    login();
  });

  // Open modal for Login from navbar
  function openLoginModal() {
    modal.style.display = 'block';
    login();
  }

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

  // Switch to Sign Up form
  signUpTab.addEventListener('click', signUp);

  // Switch to Login form
  loginTab.addEventListener('click', login);

  // Culinary Cards "See More" Functionality
  for (let i = 4; i < culinaryCards.length; i++) {
    culinaryCards[i].style.display = 'none';
  }

  seeMoreBtn.addEventListener('click', function () {
    if (seeMoreBtn.textContent === 'See More') {
      // Show all cards
      for (let i = 4; i < culinaryCards.length; i++) {
        culinaryCards[i].style.display = 'flex'; // Use 'flex' to match the card's display style
      }
      // Change button text to "See Less"
      seeMoreBtn.textContent = 'See Less';
    } else {
      // Hide all cards beyond the first 4
      for (let i = 4; i < culinaryCards.length; i++) {
        culinaryCards[i].style.display = 'none';
      }
      // Change button text to "See More"
      seeMoreBtn.textContent = 'See More';
    }
  });
});

const signUpForm = document.getElementById('signUpBtn');
const loginForm = document.getElementById('loginBtn');

// signUpForm.addEventListener('submit', (event) => {
//   const firstName = document.getElementById('firstName').value;
//   const lastName = document.getElementById('lastName').value;
//   const email = document.getElementById('email').value;
//   const password = document.getElementById('password').value;

//   let isValid = true;

//   if (firstName.length < 4) {
//     document.getElementById('firstNameError').textContent = "First name must be at least 4 letters.";
//     isValid = false;
//   } else {
//     document.getElementById('firstNameError').textContent = "";
//   }

//   if (lastName.length < 4) {
//     document.getElementById('lastNameError').textContent = "Last name must be at least 4 letters.";
//     isValid = false;
//   } else {
//     document.getElementById('lastNameError').textContent = "";
//   }

//   if (!isValidEmail(email)) {
//     document.getElementById('emailError').textContent = "Invalid email format.";
//     isValid = false;
//   } else {
//     document.getElementById('emailError').textContent = "";
//   }

//   if (!isValidPassword(password)) {
//     document.getElementById('passwordError').textContent = "Password must be at least 8 characters and include 1 uppercase, 1 lowercase, 1 number, and 1 special character.";
//     isValid = false;
//   } else {
//     document.getElementById('passwordError').textContent = "";
//   }

//   if (!isValid) {
//     event.preventDefault(); // Prevent form submission if validation fails
//   }
// });

function signUpCheck() {
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  let isValid = true;

  if (firstName.length < 4) {
    document.getElementById('firstNameError').textContent = "First name must be at least 4 letters.";
    isValid = false;
  } else {
    document.getElementById('firstNameError').textContent = "";
  }

  if (lastName.length < 4) {
    document.getElementById('lastNameError').textContent = "Last name must be at least 4 letters.";
    isValid = false;
  } else {
    document.getElementById('lastNameError').textContent = "";
  }

  if (!isValidEmail(email)) {
    document.getElementById('emailError').textContent = "Invalid email format.";
    isValid = false;
  } else {
    document.getElementById('emailError').textContent = "";
  }

  if (!isValidPassword(password)) {
    document.getElementById('passwordError').textContent = "Password must be at least 8 characters and include 1 uppercase, 1 lowercase, 1 number, and 1 special character.";
    isValid = false;
  } else {
    document.getElementById('passwordError').textContent = "";
  }

  if (!isValid) {
    preventDefault(); // Prevent form submission if validation fails
  }
}

// Login Form Validation (Email only for this example)
// loginForm.addEventListener('submit', (event) => {
//   const loginEmail = document.getElementById('loginEmail').value;
//   let isLoginValid = true;

//   if (!isValidEmail(loginEmail)) {
//     document.getElementById('loginEmailError').textContent = "Invalid email format.";
//     isLoginValid = false;
//   } else {
//     document.getElementById('loginEmailError').textContent = "";
//   }

//   if (!isLoginValid) {
//     event.preventDefault();
//   }
// });

function loginCheck() {
  const loginEmail = document.getElementById('loginEmail').value;
  let isLoginValid = true;

  if (!isValidEmail(loginEmail)) {
    document.getElementById('loginEmailError').textContent = "Invalid email format.";
    isLoginValid = false;
  } else {
    document.getElementById('loginEmailError').textContent = "";
  }

  if (!isLoginValid) {
    preventDefault();
  }
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function isValidPassword(password) {
  const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return passwordRegex.test(password);
}

// Function to switch to Sign Up form
function signUp() {
  const signUpForm = document.getElementById('signUpForm');
  const loginForm = document.getElementById('loginForm');
  const signUpTab = document.getElementById('signUpTab');
  const loginTab = document.getElementById('loginTab');

  signUpForm.style.display = 'block';
  loginForm.style.display = 'none';
  signUpTab.classList.add('active');
  loginTab.classList.remove('active');
}

// Function to switch to Login form
function login() {
  const signUpForm = document.getElementById('signUpForm');
  const loginForm = document.getElementById('loginForm');
  const signUpTab = document.getElementById('signUpTab');
  const loginTab = document.getElementById('loginTab');

  signUpForm.style.display = 'none';
  loginForm.style.display = 'block';
  loginTab.classList.add('active');
  signUpTab.classList.remove('active');
}

// Function to open the modal and switch to the login form
function openLoginModal() {
  const modal = document.getElementById('joinModal');
  modal.style.display = 'block';
  login(); // Switch to the login form
}

// Carousel Functionality
let index = 0;
function moveCarousel(step) {
  const carousel = document.getElementById("carousel");
  const cards = document.querySelectorAll(".card");
  const cardWidth = cards[0].offsetWidth + 20;
  index += step;
  if (index < 0) index = 0;
  if (index > cards.length - 2) index = cards.length - 2;
  carousel.style.transform = `translateX(${-index * cardWidth}px)`;
}

// Countdown for failed login attempts
function startCountdown(remainingTime) {
  const failAttemptElement = document.getElementById('js-fail-attempt');
  const loginButton = document.getElementById('loginBtn');

  function updateCountdown() {
    if (remainingTime > 0) {
      let minutes = Math.floor(remainingTime / 60);
      let seconds = remainingTime % 60;

      // Update the countdown message
      failAttemptElement.innerHTML = `Too many failed attempts. Try again in ${minutes} minutes ${seconds} seconds.`;
      remainingTime--;

      // Update the countdown every second
      setTimeout(updateCountdown, 1000);
    } else {
      // Countdown is over
      failAttemptElement.innerHTML = ''; // Clear the message
      loginButton.disabled = false; // Re-enable the login button
    }
  }

  // Start the countdown
  updateCountdown();
}