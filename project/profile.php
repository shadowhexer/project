<?php

    $id = $_GET['user_id'];
    require 'forms/user.php';

    if(!isset($result['display_name'])) 
    { header ('Location: index.html'); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $result['display_name'];?> | Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Include Quill stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/user.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
      $(function() {
         $("#includeHtml").load("header.php");
      });
   </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center" id="includeHtml"></div>
  </header><!-- End Header -->
    
    <div class="container" style="max-width: 100%;">
        <div class="page-inner no-page-title"  >
            <!-- start page main wrapper -->
            <div id="main-wrapper">
                <div class="row"style="padding: 0;">
                    <div class="col-lg-5 col-xl-3" >
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">Admin Profile</h4>
                            </div>
                            <div class="card-body user-profile-card mb-3">
                                <img id="profile-pic" src="https://www.gravatar.com/avatar/<?php echo md5($result['email']); ?>?s=200" class="user-profile-img rounded-circle"  alt="Profile">
                                <h4 class="text-center h6 mt-2"><strong><?php echo $result['display_name']; ?></strong></h4>
                                <p class="text-center small">BSIT - 2nd Year</p>
                                <button class="btn btn-theme btn-sm">Follow</button>
                                <button class="btn btn-theme btn-sm">Message</button>
                            </div>
                           
                        <input type="file" id="profile-pic-input" style="display: none;" accept="image/*">  
                            <hr>
                            <div class="card-heading clearfix mt-3">
                                <h4 class="card-title">Bio</h4>
                            </div>
                            <div class="card-body mb-3">
                                <p class="mb-0"><?php echo $result['biography']; ?></p>
                            </div>
                            <hr />
                            <div class="card-heading clearfix mt-3">
                                <h4 class="card-title">Contact Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0 text-muted">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Email:</th>
                                                <td><?php echo $result['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>89 Guild Street 542B, Gingoog City</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="card card-white grid-margin" >
                            <div class="card-body">
                                <div class="post">
                                    <!-- Replace the textarea with CKEditor -->
                                    <textarea name="editor1" id="editor1" rows="4"></textarea>
                                    <div class="post-options">
                                        <a href="#"><i class="fa fa-camera"></i></a>
                                        <a href="#"><i class="fas fa-video"></i></a>
                                        <a href="#"><i class="fa fa-music"></i></a>
                                        <button class="btn btn-outline-primary float-right" id="postBtn" style="background-color: #143642; border: none; color:aliceblue; margin-left: 400px;">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-timeline">
                            <ul class="list-unstyled" id="timeline-ul">
                                <!-- Timeline items will go here -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">Suggestions</h4>
                            </div>
                            <div class="card-body">
                                <div class="team">
                                    <div class="team-member">
                                        <div class="online on"></div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                    </div>
                                    <div class="team-member">
                                        <div class="online on"></div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                    </div>
                                    <div class="team-member">
                                        <div class="online off"></div>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-white grid-margin">
                            <div class="card-heading clearfix">
                                <h4 class="card-title">Some Info</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Oh, 'di ba? Nakakaputang ina
                                    Tayo'y lumilipad, at ako'y iniwan mo
                                    Oh, 'di ba? Pinagmukha mo 'kong tanga
                                    Tayo'y lumilipad, at ako'y iniwan mo
                                    'Di mo agad sinabi
                                    Na may duda na sa 'yong isip (duda, duda)
                                    Pinalalim mo pa
                                    Ang sugat dito sa aking dibdib
                                    Oh, shit
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- end page main wrapper -->
             
        </div>
        
    </div>

     <!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
  
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ITE 18</h3>
              <p>
                Ampayon, National Highway, NH1 <br>
                Butuan City, Philippines<br><br>
                <strong>Phone:</strong> +639123456789<br>
                <strong>Email:</strong> contact@us.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of Service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy Policy</a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-links">  </div>
  
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Join our mailing list!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Sign up">
            </form>
  
          </div>
  
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ITE18</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

    <!--======   JavaScript   =======-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script for handling post submission -->
    


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    
<!-- At the end of your HTML file, just before the closing </body> tag -->
<script>
    // Load user's name from localStorage if available
    var userName = localStorage.getItem("userName");
    if (userName) {
        $("#user-name").text(userName);
        $("#user-name-dropdown").text(userName); // Update user's name in dropdown
    }

    // Load profile picture from localStorage if available
    var profilePicSrc = localStorage.getItem("profilePicSrc");
    if (profilePicSrc) {
        $("#profile-pic").attr("src", profilePicSrc);
        $("#navbar-profile-pic").attr("src", profilePicSrc); // Update navbar profile picture 
        $("#profile-pic-dropdown").attr("src", profilePicSrc); 
    }

    // Handle profile picture change
    $("#change-profile-pic").click(function () {
        $("#profile-pic-input").click();
    });

    $("#profile-pic-input").change(function (e) {
        var file = e.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var profilePicSrc = e.target.result;
                $("#profile-pic").attr("src", profilePicSrc);
                $("#navbar-profile-pic").attr("src", profilePicSrc); // Update navbar profile picture
                $("#profile-pic-dropdown").attr("src", profilePicSrc);
                $("#profile-pic-dropdown").html(`<img src="${profilePicSrc}" class="user-profile-image rounded-circle" alt="Profile">`); // Update profile picture in dropdown
                // Save profile picture src to localStorage
                localStorage.setItem("profilePicSrc", profilePicSrc);
            };
            reader.readAsDataURL(file);
        }
    });

    // Function to delete the profile picture
    $("#delete-profile-pic").click(function () {
        // Remove the profile picture from localStorage
        localStorage.removeItem("profilePicSrc");
        // Set the default profile picture
        var defaultProfilePic = "https://bootdey.com/img/Content/avatar/avatar7.png";
        $("#profile-pic").attr("src", defaultProfilePic);
        $("#navbar-profile-pic").attr("src", defaultProfilePic); // Update navbar profile picture
        $("#profile-pic-dropdown").attr("src", defaultProfilePic); 
        $("#profile-pic-dropdown").html(`<img src="${defaultProfilePic}" class="user-profile-image rounded-circle" alt="Profile">`); // Update profile picture in dropdown
    });
</script>


 <!-- Include CKEditor library -->
 <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

 <script>
     // Replace textarea with CKEditor instance
     CKEDITOR.replace('editor1');

     // Function to handle post submission
     document.getElementById('postBtn').addEventListener('click', function() {
         var postContent = CKEDITOR.instances['editor1'].getData();
         if (postContent.trim() !== "") {
             addPostToTimeline(postContent);
             // Reset CKEditor content
             CKEDITOR.instances['editor1'].setData('');
         }
     });

     // Function to add a new post to the top of the timeline
     function addPostToTimeline(postContent) {
         var postHtml = `
             <li class="timeline-item">
                 <div class="card card-white grid-margin">
                     <div class="card-body">
                         <div class="timeline-item-header">
                             <img src="https://www.gravatar.com/avatar/<?php echo md5($result['email']); ?>?s=200">
                             <p><?php echo $result['display_name']; ?><span> posted a status</span></p>
                             <small>Just Now</small>
                         </div>
                         <div class="timeline-item-post">
                             <p>${postContent}</p>
                             <div class="post-options">
                                <button class="btn btn-link like-btn" style="background-color: #43d39e; color: white;"><i class="fas fa-heart" style="color: white;"></i>(<span class="likes-count">0</span>)</button>
                                <button class="btn btn-link comment-toggle" style="background-color: #43d39e; color: white;">Comment</button>
                                <button class="btn btn-link delete-btn" onclick="deletePost(this)" style="background-color: #43d39e; color: white;">Delete</button>

                                </div>
                             <div class="comment-section" style="display:none;">
                                 <textarea class="form-control comment-text" rows="2" placeholder="Write a comment"></textarea>
                                 <button class="btn btn-primary btn-sm comment-btn">Submit</button>
                             </div>
                             <div class="timeline-comment-section"></div>
                         </div>
                     </div>
                 </div>
             </li>`;
         document.getElementById('timeline-ul').insertAdjacentHTML('afterbegin', postHtml);
         // Save posts to local storage
         savePostsToLocalStorage();
     }

     // Function to delete a post
     function deletePost(button) {
         var postItem = button.closest('.timeline-item');
         postItem.remove();
         // Save posts to local storage after deletion
         savePostsToLocalStorage();
     }

     // Function to save posts to local storage
     function savePostsToLocalStorage() {
         var posts = document.getElementById('timeline-ul').innerHTML;
         localStorage.setItem('posts', posts);
     }

     // Function to load posts from local storage
     function loadPostsFromLocalStorage() {
         var posts = localStorage.getItem('posts');
         if (posts) {
             document.getElementById('timeline-ul').innerHTML = posts;
         }
     }

     // Load posts from local storage when the page loads
     window.addEventListener('load', function() {
         loadPostsFromLocalStorage();
     });
 </script>
 <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }

 </script>
</body>
</html>
