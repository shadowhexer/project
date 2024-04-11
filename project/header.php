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

<nav id="navbar" class="navbar">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="blog.php">Blog</a></li>

    <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="index.html#about">About us</a></li>
        <li><a href="team.html">Team</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </li>

    <li><a href="weather.html">Weather</a></li>
    <li>
    <?php
        if(isset($_SESSION['id']))
        {
            echo '<span id="profile-dropdown-img-container">                 
            <img id="navbar-profile-pic" src="https://www.gravatar.com/avatar/'.md5($result['email']).'?s=200" class="user-profile-image rounded-circle">
        </span>';
        }
        else
        {
            echo '<a href="login.php" class="getstarted">Sign in</a>';
        }
    ?>
    </li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<script src="assets/js/main.js"></script>

</html>

<?php

/* 

<header id="header" class="fixed-top d-flex align-items-center" style="height: 100px; " >
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
      
       <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" >Home</a></li>
          <li><a href="portfolio.html">Gallery</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.html#about">About us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </li>

          <li><a href="contact.html">Contact</a></li>
          <li><a href="weather.html">Weather</a></li>
        

  <!-- Inside the navigation bar -->
  <li class="nav-item dropdown" onl>
    <a class="nav-link" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <!-- Use an empty <span> tag to dynamically update the profile picture -->
        <span id="profile-dropdown-img-container">                 
            <img id="navbar-profile-pic" src="https://bootdey.com/img/Content/avatar/avatar7.png" class="user-profile-image rounded-circle" alt="Profile">
        </span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdownMenu">
    <!-- Add small profile picture and user's name in the dropdown -->
    <div class="sub-menu">
        <div class="user-info">
            <a href="user_profile.html" id="profile-link">
                <img id="profile-pic-dropdown" src="https://bootdey.com/img/Content/avatar/avatar7.png" class="user-profile-image rounded-circle" alt="Profile">
                 <h2>Joshua Tubo</h2></a>
        </div>
        <hr>
        <a  href="user_profile.html"class="sub-menu-link">
            <img src="navImage/profile.png">
            <p>See Profile</p>
           
        </a>
        <a href="#" id="change-profile-pic" class="sub-menu-link">
            <img src="navImage/changeprofile.png">
            <p>Change Profile </p>
            
        </a>
        <a href="#" id="delete-profile-pic" class="sub-menu-link">
            <img src="navImage/deleteprofile.png">
            <p>Delete Profile </p>
           
        </a>
        <a href="index.html" class="sub-menu-link">
            <img src="navImage/password.png">
            <p>Change Password</p>
            
        </a>
        <a href="index.html" class="sub-menu-link">
            <img src="navImage/logout.png">
            <p>Logout</p>
            
        </a>
       
    </div>
</ul>
       
  <!-- Inside the navigation bar -->
  <li>
    <!-- Replace the text link with an image tag -->
    <a href="user_profile.html" id="profile-link">
        <!-- Image of the user -->
          </a>
</li>
    
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

*/


?>