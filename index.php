<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <?php  include 'links.php' ?>
<style>
  
 .maincarousel{
    margin-top: -100px!important;
  }

@media (max-width: 767px) {
  .carousel-caption h2{
      font-size: 1.5rem!important;  
    }

  .maincarousel{
    margin-top: -280px!important;
  }

  .carousel-caption h1{
    margin-top: -200px!important;
    font-size: 2.5rem!important;
}

}
</style>
</head>
<body>

<!-- Navigation -->

<header>
<?php  include 'menu.php' ?>
  <div id="carouselExampleIndicators" class="carousel slide  maincarousel" data-ride="carousel" >
  	
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner" role="listbox">
 
      	<div class="carousel-item active" style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('images/home5.jpg');">
        <div class="carousel-caption  d-flex flex-column align-content-center justify-content-center">
          <div>        
            <h1 class="">WELCOME TO SWARA SPA</h1></div>
          <h2 class=" carousel-heading">Awaken Your Body, Mind & Spirit</h2>
          <!-- <p class="lead">This is a description for the first slide.</p> -->
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('images/home6.jpeg');">
        <div class="carousel-caption  d-flex flex-column align-content-center justify-content-center">
          <div>        
            <h1 class="">WELCOME TO SWARA SPA</h1></div>
          <h2 class="">Relax | Rejuvenate | Breathe | Refresh | Enjoy | Nourish | Renew</h2>
          <!-- <p class="lead">This is a description for the second slide.</p> -->
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>


<!-- ////////////////// Services Start //////////// -->
<section class="service_home">
<section class=" text-center py-5 ">
  <div class="container mt-5">
    <h1 class=" text-dark text-center text-uppercase font-weight-600 display-4">our Services</h1>
    <hr class="w-25 text-center ">
  </div>
</section>

<section id="content1 " class="container mb-5 ">
                
<div class="row">
	<div class="col-md-3 col-12">
		<div class="card-content shadow">
			<div class="card-img">
				<img src="images/ayurvedic_home.jpg" alt="">
				<span><h4>Ayurvedic </h4></span>
			</div>
			<div class="card-desc">
				<h3 class="text-uppercase text-center font-weight-light" >Balinese Massage</h3>
				<p class="text-center">A Daily Fullbody Warm Oil Massage Which Acts As a Powerful Recharge & Rejuvenator of Mind & Body.
</p>
				
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card-content shadow">
			<div class="card-img">
				<img src="images/swedish_home.jpg" alt="">
				<span><h4>Swedish </h4></span>
			</div>
			<div class="card-desc">
				<h3 class="text-uppercase text-center font-weight-light" >Swedish Massage</h3>
				<p class="text-center">It uses a Gentle Pressure As a Energy Lines and The Yoga like Stretching To Relax the Whole Body on Deep Level.</p>

			</div>
		</div>
	</div>
	<div class="col-md-3 col-12">
		<div class="card-content shadow">
			<div class="card-img">
				<img src="images/deeptissue_home.jpg" alt="">
				<span><h4>Deep Tissue </h4></span>
			</div>
			<div class="card-desc">
				<h3 class="text-uppercase text-center font-weight-light" >Deep Tissue </h3>
				<p class="text-center">It is a Deeply Restoring Massage Using Essential Oils Which Offer a Pleasurable Experience.</p>
			
			</div>
		</div>
	</div>
  <div class="col-md-3 col-12">
    <div class="card-content shadow">
      <div class="card-img">
        <img src="images/thai-home.jpg" alt="">
        <span><h4>Thai </h4></span>
      </div>
      <div class="card-desc">
        <h3 class="text-uppercase text-center font-weight-light" >Thai Massage</h3>
        <p class="text-center">It uses a Gentle Pressure As a Energy Lines and The Yoga like Stretching To Relax the Whole Body on Deep Level.</p>

      </div>
    </div>
  </div>
</div>   

<div class="container text-center py-5">
	<a href="service.php"><button class="btn p-3 text-white serive_home_btn" style="background:#1ABC9C;"> Check More </button></a>
</div>

</section>
</section>

<!-- //////////////// Start Gallery ///////////// -->

<section class=" text-center py-5 mb-1 gallery_home" >
  <div class="container">
    <h1 class=" text-dark text-uppercase font-weight-600 display-4">Gallery</h1>
    <hr class="w-25 text-center ">
  </div>

  <div class="container mt-4" >

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery1.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery2.jpg" alt="SwaraSpaImages">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery4.jpg" alt="SwaraSpaImages">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery18.jpg" alt="SwaraSpaImages">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery20.jpg" alt="SwaraSpaImages">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery11.jpg" alt="SwaraSpaImages">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery10.jpg" alt="SwaraSpaImages">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/gallery16.jpg" alt="SwaraSpaImages">
          </a>
    </div>


</div>
<!-- /.container -->
<div class="container text-center py-5">
	<a href="gallery.php"><button class="btn p-3 text-white" style="background:#1ABC9C;"> Check More </button></a>
</div>

</section>

<!-- ////////////////////// About us ///////////////// -->




<!-- //////////////////////// Contact Us /////////////// -->
<section class=" text-center py-5 mb-1" >
  <div class="container">
    <h1 class=" text-dark text-uppercase font-weight-600 display-4">Contact Us</h1>
    <hr class="w-25 text-center ">
  </div>

<div class=" contact-form">
          
            <form action="https://formspree.io/contact@swaraspapune.com" method="POST">
                <h3 class="text-dark font-weight-400">Send Enquiry By Mail</h3>

               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6" >
                    	<div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>


<div class="d-flex flex-row justify-content-center">
   <div>
    <a href="https://api.whatsapp.com/send?phone=919960605529">
     <img src="images/whatsapp-button.png" class="img-fluid" width="200" height="200"> </a>
   </div>
</div>
</div>
</section>

<!-- ////////////////// Footer Start /////////// -->


<footer>
    <?php include 'footer.php';?>
</footer>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


</body>
</html>
