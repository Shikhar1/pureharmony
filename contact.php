<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <?php  include 'links.php' ?>
</head>
<body class="contact-body">
<?php  include 'menu.php' ?>
<section class="contact_home"> 
<div class="container ">
    <div class="contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action="https://formspree.io/contact@swaraspapune.com" method="POST">
                <h3>Drop Us a Message</h3>
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
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-1"> </div>
                    <div class="col-md-5 google-maps">
                       <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.164166738914!2d73.91630571436939!3d18.56663607261077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1442bf611cb%3A0x36dd3dfe8ceb4931!2sViman+Nagar+Rd%2C+Pune%2C+Maharashtra+411014!5e0!3m2!1sen!2sin!4v1551160139964" width="600px" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15128.646386596216!2d73.9097396144021!3d18.566751985948677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c147b8b3a3bf%3A0x6f7fdcc8e4d6c77e!2sPhoenix+Market+City!5e0!3m2!1sen!2sin!4v1551178478716" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-center">
               <div>
                <a href="https://api.whatsapp.com/send?phone=919960605529">
                 <img src="images/whatsapp-button.png" class="img-fluid" width="200" height="200"> </a>
               </div>
               <br><br><br><br>
            </div>
   </div>

    </div>


</section>


<footer>
    <?php include 'footer.php';?>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
