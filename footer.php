<style>
  .footer-container {
    position: fixed;
    bottom: 0;
    right: 0;
    left: 0;
    height: 70px;
    background-color: rgb(51, 51, 51);
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .upper-text {
    flex: 1;
    display: flex;
    flex-direction: row;
    justify-content: center;
  }

  .social-accounts {
    flex: 1;
  }

  .social-accounts ul {
    display: flex;
    column-gap: 12px;
    flex-direction: row;
    justify-content: center;
    list-style-type: none;
  }

  .social-accounts a {
    color: white;
    text-decoration: none;
    transition: color 0.15s;
  }

  .fb:hover {
    color: rgb(36, 69, 255);
  }

  .is:hover {
    color: rgb(255, 128, 64);
  }

  .yt:hover {
    color: red;
  }
</style>

<footer class="footer-container">
  <div class="upper-text">
    <p>
      &copy; 2025 Food Fusion All Right Reserved.
    </p>
  </div>

  <div class="social-accounts">
    <ul>
      <li><a href="https://facebook.com" class="fb">Facebook</a></li>
      <li><a href="https://intagram.com" class="is">Instagram</a></li>
      <li><a href="https://youtube.com" class="yt">Youtube</a></li>
    </ul>
  </div>
</footer>