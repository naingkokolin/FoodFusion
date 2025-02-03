<style>
  @font-face {
    font-family: 'Roboto';
    src: url('../fonts/Roboto-Regular.ttf');
  }

  @font-face {
    font-family: 'Prompt';
    src: url('../fonts/Prompt-Regular.ttf');
  }

  @font-face {
    font-family: 'Titillium';
    src: url(../fonts/TitilliumWeb-Regular.ttf);
  }

  .footer-container {
    margin-top: 20px;
    bottom: 0;
    width: 100%;
    min-width: 300px;
    height: auto;
    background-color: rgb(228, 218, 218);
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
  }

  .logo-section,
  .link-section,
  .policy-section {
    flex: 1;
    min-width: 250px;
    height: auto;
    font-family: 'Prompt', Courier, monospace;
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex-wrap: wrap;
    align-items: flex-start;
  }

  .footer-container img {
    max-width: 100px;
    height: auto;
  }

  /* .link-section {}

  .policy-section {} */

  .social-links ul {
    display: flex;
    column-gap: 12px;
    flex-direction: row;
    justify-content: center;
    list-style-type: none;
  }

  .social-links img {
    width: 24px;
    height: 24px;
  }

  .social-links img:hover {
    transform: scale(1.2);
  }

  .footer-container li {
    list-style-type: none;
  }

  .footer-container  a {
    text-decoration: none;
  }

  @media(max-width: 768px) {
    .footer-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: rgb(204, 232, 222);
    }
  }
</style>

<div class="footer-container">
  <div class="logo-section">
    <div><img src="./img/logo1.png" alt="Logo"></div>
    <div class="social-links">
      <ul>
        <li><a href="https://www.facebook.com" class="fb"><img src="./icons/icons8-facebook-24.png" alt="Facebook"></a></li>
        <li><a href="https://www.youtube.com" class="yt"><img src="./icons/icons8-youtube-48.png" alt="Youtube"></a></li>
        <li><a href="https://www.instagram.com/"><img src="./icons/icons8-instagram-48.png" alt="Instagram"></a></li>
        <li><a href="https://www.pinterest.com/"><img src="./icons/icons8-pinterest-48.png" alt="Pinterest"></a></li>
        <li><a href="https://x.com/?lang=en"><img src="./icons/icons8-twitter-48.png" alt="Twitter"></a></li>
      </ul>
    </div>
    <div></div>
  </div>

  <div class="link-section">
    <ul>
      <li><a href="./about-us.php">About Us</a></li>
      <li><a href="./contact-us.php">Contact Us</a></li>
      <li><a href="./community.php">Community</a></li>
    </ul>
  </div>

  <div class="policy-section">
    <ul>
      <li><a href="./privacy-policy.php">Privacy Policy</a></li>
      <li><a href="./cookies-policy.php">Cookies Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">FAQs</a></li>
    </ul>
  </div>
</div>