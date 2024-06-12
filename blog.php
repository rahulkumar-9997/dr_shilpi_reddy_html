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
      <title>Dr. | Our Blogs</title>
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
                           <h1>Our Blogs</h1>
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
					<a href="blog-details.php">
					    <img alt="" src="assets/shilpi-img/blog-1.webp">
					</a>
				    </div>
				    <div class="post-item-description">
				       <h2>
					  <a href="work-detail.php">MRS MOM Event 2023</a>
				       </h2>
				       <p>
					    Celebrating pregnancy, parenting and healthy beginnings.
					</p>
					<a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>
			    </div>
			</div>
			<div class="col-xl-6">
			    <div class="float-left w-100 post-item border mb-4">
				<div class="post-item-wrap position-relative">
				    <div class="post-image">
					<a href="blog-details.php">
					    <img alt="" src="assets/shilpi-img/blog-2.webp">
					</a>
				    </div>
				    <div class="post-item-description">
				       <h2>
					  <a href="work-detail.php">WOMEN'S WINGS (RERF) BRAHMA KUMARIS</a>
				       </h2>
				       <p>
					    Experience a month brimming with inspiration and transformation! From July 30th to September 16th, 2023, 
					</p>
					<a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>
			    </div>
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