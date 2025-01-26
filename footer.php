<style>
  .footer-container {
    /* position: fixed; */
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: rgb(255, 248, 206);
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
  }

  .social-accounts ul {
    display: flex;
    column-gap: 12px;
    flex-direction: row;
    justify-content: center;
    list-style-type: none;
  }

  .social-accounts a {
    color: black;
    text-decoration: none;
    transition: color 0.15s;
  }

  .social-accounts img {
    width: 24px;
    height: 24px;
  }

  .social-accounts img:hover {
    transform: scale(1.2);
  }
</style>

<footer class="footer-container">
  <div class="upper-text">&copy; 2025 Food Fusion. All Right Reserved.</div>

  <div class="social-accounts">
    <ul>
      <li><a href="https://facebook.com" class="fb"><img src="./icons/icons8-facebook-24.png" alt="Facebook"></a></li>
      <li><a href="https://youtube.com" class="yt"><img src="./icons/icons8-youtube-48.png" alt="Youtube"></a></li>
      <!-- // TODO: add related icons for social media links -->
    </ul>
  </div>
</footer>