<!-- this is the header -->
<header>
  <!-- opens and closes the side navigation bar -->
  <div id="hamburger" class="centeredicon">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <!-- displays the nessesary user information -->
  <div id="info">
    <!-- username and photo -->
    <div id="user">
      <div id="photo" class="centeredicon">
        <img src="images/profile/profile-placeholder.png" alt="Profile picture" />
      </div>
      <div id="name">
        <?php
        session_start();
        require_once("dbConfig.php");
        echo isset($_SESSION['username']) ? $_SESSION['username'] : null;
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        ?></div>
      <div id="settingsicon" class="centeredicon">
        <i class="fas fa-caret-down"></i>
      </div>
    </div>
    <!-- dropdown -->
    <div id="settingdropdown" style="display: none">
      <div class="setting">
        Dark
        <label class="theme-switch" for="checkbox">
          <input type="checkbox" id="checkbox" />
          <div class="slider round"></div>
        </label>
      </div>
      <a href="login/update.php" class="setting">Edit</a>
      <a href="login/logout.php" class="setting">Log out</a>

    </div>

    <!-- notifications -->
    <div id="share" class="centeredicon" data-badge="">
      <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Checkout%20my%20pomodoro%20progress&url=https://estudentproject.com/application_pomodoro.php" data-size="large" target="_blank">
        <i class="fas fa-retweet fa-2x" id="share-icon"></i>
      </a>
    </div>

    <!-- notifications -->
    <div id="notification" class="centeredicon" data-badge="">
      <i class="far fa-bell fa-2x" id="notification-icon"></i>
    </div>
  </div>
</header>