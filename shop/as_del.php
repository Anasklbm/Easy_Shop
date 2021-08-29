<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<?php
                 
                    if(isset($_POST['sub1']))
 {
    $mid=$_GET['mid'];
    $t1=$_POST['t1'];
    
    $upd1=mysqli_query($dbcon,"update p_order set did='$t1'where id='$mid'");
    
   
    if($upd1>0)
    {
    
    
      
    
     
                header("location:hist.php");
            }
    }
        
 
 
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="../tmplate/https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="../tmplate/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="../tmplate/https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../tmplate/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../tmplate/css/animate.css">
    
    <link rel="stylesheet" href="../tmplate/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../tmplate/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../tmplate/css/magnific-popup.css">

    <link rel="stylesheet" href="../tmplate/css/aos.css">

    <link rel="stylesheet" href="../tmplate/css/ionicons.min.css">

    <link rel="stylesheet" href="../tmplate/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../tmplate/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../tmplate/css/flaticon.css">
    <link rel="stylesheet" href="../tmplate/css/icomoon.css">
    <link rel="stylesheet" href="../tmplate/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<?php
                
                include 'menu.php';
                
                ?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('../tmplate/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	 <h1 class="mb-0 bread">Add Delivery boy</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	
        <div >
            
            <div class="row">
               
                
                <div class="col-md-12">
                    <form method="post"class="bg-white p-5 contact-form"enctype="multipart/form-data">
                     <div class="form-example-int">
                            <div class="form-group">
                                <label>Category</label>
                                <div class="nk-int-st">
                                    <select class="form-control" name="t1">
                        <option value="">Choose Delivery Boy</option>
                        
                        
                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from del where sid='$usr'");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[3] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                           }
                                        ?>
                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-example-int mg-t-15">
                            <button name="sub1" class="btn btn-success notika-btn-success">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
                
                
                
                
                
                
                
            </div>
          

        </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section" style="display: none">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="../tmplate/https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../tmplate/js/jquery.min.js"></script>
  <script src="../tmplate/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../tmplate/js/popper.min.js"></script>
  <script src="../tmplate/js/bootstrap.min.js"></script>
  <script src="../tmplate/js/jquery.easing.1.3.js"></script>
  <script src="../tmplate/js/jquery.waypoints.min.js"></script>
  <script src="../tmplate/js/jquery.stellar.min.js"></script>
  <script src="../tmplate/js/owl.carousel.min.js"></script>
  <script src="../tmplate/js/jquery.magnific-popup.min.js"></script>
  <script src="../tmplate/js/aos.js"></script>
  <script src="../tmplate/js/jquery.animateNumber.min.js"></script>
  <script src="../tmplate/js/bootstrap-datepicker.js"></script>
  <script src="../tmplate/js/scrollax.min.js"></script>
  <script src="../tmplate/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../tmplate/js/google-map.js"></script>
  <script src="../tmplate/js/main.js"></script>
    
  </body>
</html>