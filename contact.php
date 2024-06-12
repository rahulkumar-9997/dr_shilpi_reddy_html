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
      <title>Dr. | Contact</title>
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
                           <h1>Contact</h1>
                           <p class="text-white mb-0">Make Schedule Easier and Simpler for Patients</p>
                        </div>
                     </div>
                  </div>
            </section>
               <!-- banner-end -->
            </div>
         </div>
      </div>
      <!-- header-and-banner-section -->
      <section>
         <div class="w-100 float-left Schedule-con">
            <div class="container">
               <!--<div class="Schedule-heading text-center">
                  <h2>Make Schedule Easier and <br>
                     Simpler for Patients
                  </h2>
               </div>-->
               <div class="Schedule-box text-md-left text-center">
		    <div class="row">
			<div class="col-lg-6 d-flex justify-content-between">
			    <div class="row">
				<div class="col-lg-12 col-md-12">
				    <div class="Schedule-box-item position-relative w-100 float-left">
				       <figure class="mb-0 float-md-left overlay-img">
					  <img src="assets/image/Schedule-icon1.png" alt="Schedule-icon" class="img-fluid">
				       </figure>
				       <div class="Schedule-box-title float-md-left overlay-img">
					  <h5>Email</h5>
					  <span class="d-block">contact@drkshilpireddy.com</span>
					  <!--<span class="d-block">help@medtexh.com</span>-->
				       </div>
				    </div>
				</div>
				<div class="col-lg-12 col-md-12">
				    <div class="Schedule-box-item position-relative w-100 float-left">
				       <figure class="mb-0 float-md-left overlay-img">
					  <img src="assets/image/Schedule-icon2.png" alt="Schedule-icon" class="img-fluid">
				       </figure>
				       <div class="Schedule-box-title float-md-left overlay-img">
					  <h5>Location</h5>
					  <span class="d-block">Kims Cuddles, Kondapur,<br> Hyderabad, Telangana 500084</span>
				       </div>
				    </div>
				</div>
				<div class="col-lg-12 col-md-12">
				    <div class="Schedule-box-item position-relative w-100 float-left mb-md-0">
				       <figure class="mb-0 float-md-left overlay-img">
					  <img src="assets/image/Schedule-icon3.png" alt="Schedule-icon" class="img-fluid">
				       </figure>
				       <div class="Schedule-box-title float-md-left overlay-img">
					  <h5>Phone No.</h5>
					  <span class="d-block">+91 95036 06049</span>
					  <!--<span class="d-block">+234 56 789 012</span>-->
				       </div>
				    </div>
				</div>
			    </div>
			</div>
			<div class="col-lg-6">
			    <div class="Schedule-box-item position-relative w-100 float-left">
				<form class="contact-form-plan-box" id="contactpage" method="POST">
				    <div class="form-row">
				       <div class="col-lg-6 col-md-6">
					  <div class="form-group">    
					     <input type="text" class="form-control" placeholder="Your Name:" name="name" id="name"> 
					  </div>
				       </div>
				       <div class="col-lg-6 col-lg-6 col-md-6">
					  <div class="form-group">    
					     <input type="email" class="form-control" placeholder="Your Email:" name="email" id="email"> 
					  </div>
				       </div>
				    </div>
				    <div class="form-row">
				       <div class="col-lg-6 col-lg-6 col-md-6">
					  <div class="form-group">    
					     <input type="tel" class="form-control" placeholder="Phone:" name="phone" id="phone"> 
					  </div>
				       </div>
				       <div class="col-lg-6 col-lg-6 col-md-6">
					  <div class="form-group">
					     <select class="form-control select-form position-relative">
						<option>Subject:</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					     </select>
					     <i class="fas fa-angle-down down-icon"></i>
					  </div>
				       </div>
				    </div>
				    <div>
				       <div class="textarea form-group">    
					  <textarea class="form-control" placeholder="Message:" rows="3" name="comments" id="comments"></textarea>
				       </div>
				    </div>
				    <div class="submitform-button">
				       <button type="submit" id="submit" class="submitform-btn appointment-btn ml-auto mr-auto d-block">Send Message</button>
				    </div>
				</form>  
			    </div>
			</div>
                     
                     
                     
                     <!--<div class="col-lg-6 col-md-6">
                        <div class="Schedule-box-item position-relative w-100 float-left mb-0">
                           <figure class="mb-0 float-md-left overlay-img">
                              <img src="assets/image/Schedule-icon4.png" alt="Schedule-icon" class="img-fluid">
                           </figure>
                           <div class="Schedule-box-title float-md-left overlay-img">
                              <h5>Working Hours</h5>
                              <span class="d-block">Monday - Friday: 8AM - 9PM</span>
                              <span class="d-block"> Weekends: Closed</span>
                           </div>
                        </div>
                     </div>-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- map-section-->
      <div class="w-100 float-left map-con">
         <div class="container">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7796251.028744009!2d68.79104375839235!3d17.423148289175337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99979bdcfa17%3A0x33ef02c1632aad90!2sDr.%20Shilpa%20Reddy%20-%20Radiologist%20%7C%20Pregnancy%20Scan%20Doctor%20%7C%20Ultrasound%20Specialist!5e0!3m2!1sen!2sin!4v1717743992706!5m2!1sen!2sin" style=" height:360px; width: 100%; border: 0;"></iframe>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51641910.033771195!2d109.09423828124999!3d-37.814123701604444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1640952396499!5m2!1sen!2s"  style=" height:360px; width: 100%; border: 0;"></iframe>-->
         </div>
      </div>
      <!-- map-section-->
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