<style>
  /* Basic Styling for the Cookie Banner */
  #cookie-banner {
    position: fixed;
    /* Stay at the bottom */
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    /* Semi-transparent black */
    color: white;
    padding: 20px;
    text-align: center;
    z-index: 1000;
    /* Ensure it's on top */
    display: flex;
    flex-direction: column;
    /* Stack content vertically */
    align-items: center;
    /* Center horizontally */
    justify-content: center;
    /* Center vertically */
    transition: opacity 0.5s ease-in-out;
    /* Smooth appearance/disappearance */
    opacity: 1;
    /* Initially visible */
  }

  #cookie-banner.hidden {
    opacity: 0;
    pointer-events: none;
    /* Prevent interaction when hidden */
  }

  #cookie-banner p {
    margin-bottom: 10px;
    max-width: 800px;
    /* Limit text width for readability */
  }

  #cookie-banner button {
    background-color: #007bff;
    /* Blue button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    /* Smooth hover effect */
  }

  #cookie-banner button:hover {
    background-color: #0056b3;
    /* Darker blue on hover */
  }

  a {
    color: #ff6347;
    text-decoration: none;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    #cookie-banner p {
      font-size: 14px;
      /* Smaller text on mobile */
    }

    #cookie-banner button {
      font-size: 14px;
      /* Smaller button text on mobile */
      padding: 8px 16px;
      /* Smaller button padding on mobile */
    }
  }
</style>

<div id="cookie-banner">
  <p>This website uses cookies to ensure you get the best experience on our website. <a href="./cookies-policy.php">Learn more</a></p>
  <button onclick="acceptCookies()">Accept Cookies</button>
</div>

<script>
  const cookieBanner = document.getElementById('cookie-banner');

  // Function to accept cookies and hide the banner
  function acceptCookies() {
    localStorage.setItem('cookie_accepted', 'true'); // Store acceptance in local storage
    cookieBanner.classList.add('hidden'); // Hide the banner
  }

  // Check if cookies have already been accepted
  window.addEventListener('DOMContentLoaded', () => { // Run after content loads
    if (localStorage.getItem('cookie_accepted') === 'true') {
      cookieBanner.classList.add('hidden'); // Hide if already accepted
    }
  });
</script>