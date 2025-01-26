document.addEventListener('DOMContentLoaded', () => {
  // Cookie Consent
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
  // });

  // TODO: add cookie consent to the home page (index.html)

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
});

function signUp() {
  signUpForm.style.display = 'block';
  loginForm.style.display = 'none';
  signUpTab.classList.add('active');
  loginTab.classList.remove('active');
}

function login() {
  signUpForm.style.display = 'none';
  loginForm.style.display = 'block';
  loginTab.classList.add('active');
  signUpTab.classList.remove('active');
}