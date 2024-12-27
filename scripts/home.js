// // Responsive Navigation
// const hamburger = document.querySelector('.hamburger');
// const navLinks = document.querySelector('.nav-links');

// hamburger.addEventListener('click', () => {
//   navLinks.classList.toggle('active');
// });


// Cookie Consent
const cookieConsent = document.getElementById('cookie-consent');
const acceptCookiesBtn = document.getElementById('accept-cookies');

acceptCookiesBtn.addEventListener('click', () => {
  cookieConsent.style.display = 'none';
});

// "Join Us" Popup
const joinUsBtn = document.getElementById('join-us-btn');
const joinPopup = document.getElementById('join-popup');
const closePopupBtn = document.getElementById('close-popup');

// joinUsBtn.addEventListener('click', () => {
//   joinPopup.classList.remove('hidden');
// });

// closePopupBtn.addEventListener('click', () => {
//   joinPopup.classList.add('hidden');
// });

// Carousel Navigation
const carouselContainer = document.querySelector('.carousel-container');

// Auto scroll carousel
let carouselIndex = 0;
setInterval(() => {
  const items = carouselContainer.children;
  if (items.length > 0) {
    carouselIndex = (carouselIndex + 1) % items.length;
    items[carouselIndex].scrollIntoView({ behavior: 'smooth', inline: 'center' });
  }
}, 3000);

// Get modal elements
const modal = document.getElementById('joinModal');
const joinBtn = document.getElementById('joinBtn');
const closeBtn = document.getElementById('closeBtn');
const signUpTab = document.getElementById('signUpTab');
const loginTab = document.getElementById('loginTab');
const signUpForm = document.getElementById('signUpForm');
const loginForm = document.getElementById('loginForm');

// Open modal when "Join Us" is clicked
// joinBtn.addEventListener('click', () => {
//   modal.style.display = 'block';
// });

// Close modal when "X" is clicked
// closeBtn.addEventListener('click', () => {
//   modal.style.display = 'none';
// });

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
