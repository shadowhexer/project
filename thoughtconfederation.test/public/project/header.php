<?php
    require 'forms/profile.php';

    // Check if $post is set and is an array
    if (isset($result) && is_array($result)) {
        // Check if the 'display_name' key exists in the $post array
        if (isset($result['display_name'])) {
            $displayName = $result['display_name'];
        } else {
            // Handle case where 'display_name' key is not set
            $displayName = 'Unknown user';
        }
    } else {
        // Handle case where $post is not set or is not an array
        $displayName = 'Unknown User';
    }

?>

<html>
  
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/header.css" rel="stylesheet">

<a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

<nav id="navbar" class="navbar" style="margin-right: 80px">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="blog.php">Blog</a></li>

        <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="index.html#about">About us</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </li>

        <li><a href="weather.html">Weather</a></li>
        <li>
            <?php
              if(isset($_SESSION['id']))
              {
                  echo '<div id="profile-dropdown-trigger">
                  <img id="navbar-profile-pic" src="https://www.gravatar.com/avatar/'.md5($result['email']).'?s=200" class="user-profile-image rounded-circle"></div>
              
                  <ul class="dropdown-menu" id="profile-dropdown-content" style="display: none;">
                      <li>
                          <div class="sub-menu">
                              <div class="user-info">
                                  <a href="/project/profile.php?user_id='.$result['user_id'].'" id="profile-link">
                                      <img id="profile-pic-dropdown" src="https://www.gravatar.com/avatar/'.md5($result['email']).'?s=200" class="user-profile-image rounded-circle" alt="Profile">
                                      <h2>'.$result['display_name'].'</h2>
                                  </a>
                              </div>
                              <hr>
                              <a href="user.php" id="change-profile-pic" class="sub-menu-link">
                                  <img src="assets/img/navbar/setting.png">
                                  <p>Account Settings</p>
                              </a>
                              <a href="security.php" class="sub-menu-link">
                                  <img src="assets/img/navbar/padlock.png">
                                  <p>Change Password</p>
                              </a>
                              <a href="forms/logout.php" class="sub-menu-link">
                                  <img src="assets/img/navbar/logout.png">
                                  <p>Logout</p>
                              </a>
                          </div>
                      </li>
                  </ul>';
              }
              else
              { echo '<a href="sign-in.php" class="getstarted">Sign in</a>';  }
            ?>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<script src="assets/js/main.js"></script>
<script>
document.getElementById('profile-dropdown-trigger').addEventListener('click', function() {
    var dropdownContent = document.getElementById('profile-dropdown-content');
    if (dropdownContent.style.display === 'none') {
        dropdownContent.style.display = 'block';
    } else {
        dropdownContent.style.display = 'none';
    }
});
</script>

</html>