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
  const signUpForm = document.getElementById('signUpForm');
  const loginForm = document.getElementById('loginForm');

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
function startCountdown(seconds) {
  const failAttemptElement = document.getElementById('js-fail-attempt');
  const loginButton = document.querySelector('#loginForm button[type="submit"]');

  let remainingTime = seconds;

  const interval = setInterval(() => {
    const minutes = Math.floor(remainingTime / 60);
    const seconds = remainingTime % 60;

    failAttemptElement.innerHTML = `Too many failed attempts. Try again in ${minutes} m: ${seconds} s!`;

    if (remainingTime <= 0) {
      clearInterval(interval);
      failAttemptElement.innerHTML = '';
      loginButton.disabled = false;
    }

    remainingTime--;
  }, 1000);
}