document.addEventListener('DOMContentLoaded', () => {
  // Cookie Consent
  const cookieConsent = document.getElementById('cookie-consent');
  const acceptCookiesBtn = document.getElementById('accept-cookies');

  const ls = localStorage.getItem('first-visit');

  acceptCookiesBtn.addEventListener('click', () => {
    localStorage.setItem('first-visit', false);
    cookieConsent.style.display = 'none';
  });

  if (ls) cookieConsent.style.display = 'none';
});

// TODO: add cookie consent to the home page (index.html)

const jsJoinBtn = document.getElementById("js-join-btn");
const joinUsBtn = document.getElementById('join-us-btn'); // don't need till now
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
jsJoinBtn.addEventListener('click', () => {
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

let getStartBtn = document.getElementById('js-get-start-btn');
getStartBtn.addEventListener('click', () => {
  alert('Get Started');
});