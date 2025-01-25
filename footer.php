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
  <div class="upper-text">&copy; 2025 Food Fusion. All Right Reserved.</div>

  <div class="social-accounts">
    <ul>
      <li><a href="https://facebook.com" class="fb">Facebook</a></li>
      <li><a href="https://intagram.com" class="is">Instagram</a></li>
      <li><a href="https://youtube.com" class="yt">Youtube</a></li>
      <!-- // TODO: add related icons for social media links -->
    </ul>
  </div>
</footer>