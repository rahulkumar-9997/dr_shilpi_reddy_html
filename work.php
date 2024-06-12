<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <?php 
	    include './common/css-file.php';
	?>
	<link rel="stylesheet" href="assets/css/super-classes.css">
	<link rel="stylesheet" href="assets/css/custom-style.css">
      <title>Dr. | Work</title>
   </head>
   <body>
      <!-- top-bar-section-->
      <?php
	include './common/top-bar-header.php';
      ?>
      <!-- top-bar-section-->
      <!-- header-and-banner-section -->
      <div class="w-100 float-left header-and-banner-con banner-overlay-img">
         <div class="container">
            <div class="overlay-img">
               <!-- navbar-start -->
               <?php
		    include './common/header-menu.php';
	       ?>
               <!-- navbar-end -->
               <!-- banner-start -->
               <section>
                  <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                     <div class="container">
                        <div class="generic-banner-content text-white text-center">
                           <h1>Work</h1>
                           <p class="text-white mb-0">Business and Organizations By Dr.K. Shilpi Reddy</p>
                        </div>
                     </div>
                  </div>
            </section>
               <!-- banner-end -->
            </div>
         </div>
      </div>
      <!-- header-and-banner-section -->
      <section class=" blog-posts w-100 float-left">
         <div class="container">
            <div class="row">
		<div id="blog" class="col-xl-12">
		    <div class="row">
			<div class="col-xl-6">
			    <div class="float-left w-100 post-item border mb-4">
				<div class="post-item-wrap position-relative">
				    <div class="post-image">
					<a href="work-detail.php">
					    <img alt="" src="assets/shilpi-img/work-img.webp">
					</a>
				    </div>
				    <div class="post-item-description">
				       <h2>
					  <a href="work-detail.php">Womens Wings(RERF) Brahma Kumaris</a>
				       </h2>
				       <p>
					    Experience a month brimming with inspiration and transformation! 
					    From July 30th to September 16th, 2023.
					</p>
					<a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>
			    </div>
			</div>
			<div class="col-xl-6">
			   <div class="float-left w-100 post-item border mb-4">
			      <div class="post-item-wrap position-relative">
				    <div id="blogslider" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					    <div class="carousel-item active">
						<img src="assets/shilpi-img/work-img.webp" alt="">
					    </div>
					    <div class="carousel-item">
						<img src="assets/shilpi-img/work-img.webp" alt="">
					    </div>
					    <div class="carousel-item">
						<img src="assets/shilpi-img/work-img.webp" alt="">
					    </div>
					</div>
				       <a class="carousel-control-prev" href="#blogslider" data-slide="prev">
					   <span class="carousel-control-prev-icon"></span>
				       </a>
				       <a class="carousel-control-next" href="#blogslider" data-slide="next">
					   <span class="carousel-control-next-icon"></span>
				       </a>
				    </div>
				    <div class="post-item-description">
					<h2>
					    <a href="work-detail.php">Womens Health Conclave</a>
					</h2>
					<p>Health Conclave 2023 for women, aimed to empower and unite, creating a healthier and stronger future, together.</p>
					<a href="work-detail.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
            </div>
	</div>
    </section>
    <section>
         <div class="w-100 float-left quality-system-con Experince-section">
            <div class="container">
		<div class="row">
		    <div class="col-lg-4 col-md-4">
			<div class="quality-system-right-con position-relative text-center overlay-img">
			    <figure class="mb-0">
				<img src="assets/shilpi-img/work_bottom_1.webp" alt="professional-doctor-img" class="img-fluid human-img">
			    </figure>
			</div>
		    </div>
		    <div class="col-lg-4 col-md-4">
			<div class="quality-system-right-con position-relative text-center overlay-img">
			    <figure class="mb-0">
				<img src="assets/shilpi-img/work_bottom_2.webp" alt="professional-doctor-img" class="img-fluid human-img">
			    </figure>
			</div>
		    </div>
		    <div class="col-lg-4 col-md-4">
			<div class="quality-system-right-con position-relative text-center overlay-img">
			    <figure class="mb-0">
				<img src="assets/shilpi-img/work_bottom_3.webp" alt="professional-doctor-img" class="img-fluid human-img">
			    </figure>
			</div>
		    </div>
		</div>
            </div>
         </div>
      </section>
      <!-- core-vaule-section -->
      <?php
	include './common/footer-bottom-top.php';
      ?>
      <!-- weight-footer-section -->
      <!-- footer-section -->
      <?php
	include './common/footer-bottom.php';
      ?>
      <!-- footer-section -->
       <?php
      include './common/js-file.php';
      ?>
   </body>
</html>