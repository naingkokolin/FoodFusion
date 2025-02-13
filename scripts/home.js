document.addEventListener('DOMContentLoaded', () => {
  const cookieConsent = document.getElementById('cookie-consent');
  const acceptCookiesBtn = document.getElementById('accept-cookies');

  const ls = localStorage.getItem('first-visit');

  if (acceptCookiesBtn && cookieConsent) {
    acceptCookiesBtn.addEventListener('click', () => {
      localStorage.setItem('first-visit', false);
      cookieConsent.style.display = 'none';
    });

    if (ls) cookieConsent.style.display = 'none';
  }

  const jsJoinBtn = document.getElementById('js-join-btn');
  const loginBtn = document.getElementById('js-login-btn');
  const modal = document.getElementById('joinModal');
  const closeBtn = document.getElementById('closeBtn');
  const signUpTab = document.getElementById('signUpTab');
  const loginTab = document.getElementById('loginTab');

  jsJoinBtn.addEventListener('click', () => {
    modal.style.display = 'block';
    signUp();
  });

  loginBtn.addEventListener('click', () => {
    modal.style.display = 'block';
    login();
  });

  function openLoginModal() {
    modal.style.display = 'block';
    login();
  }

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  });

  signUpTab.addEventListener('click', signUp);

  loginTab.addEventListener('click', login);

  // window.onclick = function (event) {
  //   const modal = document.getElementById('js-reset-modal');
  //   if (event.target === modal) {
  //     modal.style.display = 'none';
  //   }
  // };

});

const signUpForm = document.getElementById('signUpForm');
const loginForm = document.getElementById('loginForm');

let isSuccess = false;

function signUpCheck(event) {
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
    event.preventDefault();
  }
}

function loginCheck(event) {
  const loginEmail = document.getElementById('loginEmail').value;
  let isLoginValid = true;

  if (!isValidEmail(loginEmail)) {
    document.getElementById('loginEmailError').textContent = "Invalid email format.";
    isLoginValid = false;
  } else {
    document.getElementById('loginEmailError').textContent = "";
  }

  if (!isLoginValid) {
    event.preventDefault();

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

function openLoginModal() {
  const modal = document.getElementById('joinModal');
  modal.style.display = 'block';
  login(); // Switch to the login form
}

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

function startCountdown(remainingTime) {
  const failAttemptElement = document.getElementById('js-fail-attempt');
  const loginButton = document.getElementById('loginBtn');

  function updateCountdown() {
    if (remainingTime > 0) {
      let minutes = Math.floor(remainingTime / 60);
      let seconds = remainingTime % 60;

      failAttemptElement.innerHTML = `Too many failed attempts. Try again in ${minutes} minutes ${seconds} seconds.`;
      remainingTime--;

      setTimeout(updateCountdown, 1000);
    } else {
      failAttemptElement.innerHTML = ''; 
      loginButton.disabled = false; 
    }
  }
  
  updateCountdown();
}