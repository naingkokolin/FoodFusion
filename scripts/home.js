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
