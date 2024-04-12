<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Posts</title>
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

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>
      $(function() {
         $("#includeHtml").load("header.php");
         $("#footer").load("footer.html");
      });
   </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center" id="includeHtml"></div>
  </header><!-- End Header -->
   
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <!-- blog ENTRY 1-->
            <article class="entry" data-aos="zoom-in" data-aos-duration="1000">

              <div class="entry-img">
                <img src="" id="title_image" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="" id="title">Title</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="" id="posterName">Name</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time id="datePost">YYYY-mm-dd</time></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i><div id="comments-count">N/A</div></li>
                </ul>
              </div>
            </article>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span id="general">(0)</span></a></li>
                  <li><a href="#">Digital Art <span id="digital_art">(0)</span></a></li>
                  <li><a href="#">Politics <span id="politics">(0)</span></a></li>
                  <li><a href="#">Reviews <span id="reviews">(0)</span></a></li>
                  <li><a href="#">Education <span id="education">(0)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Post Name</a></h4>
                  <time datetime="2024-01-01">YYYY-mm-dd</time>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer"></footer><!-- End Footer -->

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
  <script src="assets/js/main.js"></script>
  <script src="assets/js/category.js></script>

  <script>

    // Get data
    fetch('forms/blog.php', {
            method: 'GET',
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json()) // Get the response as text
        .then(data => {

            try {
                // Handle the response
                document.getElementById('title_image').src = data.image;
                document.getElementById('posterName').text = data.username;
                document.getElementById('title').href = "/project/post.php?post_id=" + data.post_id;
                //document.getElementById('initial-caption').innerHTML = data.blog_post.split('. ', 1)[0];
                document.getElementById('datePost').innerText = data.date_post;
                document.getElementById('comments-count').textContent = data.count + " Comment(s)";
                document.getElementById('title').innerHTML = data.post_title;

            } catch (error) {
                console.error('JSON Error: ', error);
            }
        })
        .catch(error => {
            console.error('Fetch error: ', error);
        });

  </script>

</body>

</html>