<?php
    session_id();
    session_start();

    if(isset($_SESSION['id']))
    {
        header('Location: user.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- =======================================================
  * Template Name: Sailor
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body 
style="background-image: url('assets/img/slide/slide-1.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">



<main id="main">

<!-- ======= Login Section ======= -->
<section id="login" class="login">
  <div class="container" data-aos="zoom-in">

    <div class="row">

      <div>

        <div class="login-page">

          <div class="login-form" data-aos="fade-up" data-aos-duration="5000">
            <h4>Login with your account</h4>

            <form action="forms/login.php" method="post">

              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="email" type="text" id="email" class="form-control" placeholder="Email">
                </div>
                
              </div>
              <div class="col-md-6 form-group">
                <input name="passkey" type="password" id="passkey" class="form-control" placeholder="Password">
              </div>

              <div class="row">
					
                <div class="col-12 py-1">
                <div class="form-text" id="passmessage"> </div>
                </div>
              </div>

              <div class="row">

              <div class="col-md-6 form-group">
                <button type="submit" id="submitform" class="btn btn-primary login" name="login" disabled="true">Login</button>
              </div>

              <div class="col-md-6 form-group">
                <p class="form-check-label">Don't have an account?
                  <a href="create_account.php" class="new_account" style="text-decoration: none; color: rgb(12, 72, 0); cursor: pointer;">Create account</p>  
              </div>

              </div>

            </form>

          </div>

        </div><!-- End blog comments -->

      </div><!-- End blog entries list -->

    </div>

  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/login.js" type="text/javascript"></script>

  <script src="assets/js/emailChecker.js"></script>


</body>

</html>