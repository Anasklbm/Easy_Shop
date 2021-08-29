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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="../tmplate/https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="../tmplate/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="../tmplate/https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="../tmplate/shop.html">Shop</a>
              	<a class="dropdown-item" href="../tmplate/wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="../tmplate/product-single.html">Single Product</a>
                <a class="dropdown-item" href="../tmplate/cart.html">Cart</a>
                <a class="dropdown-item" href="../tmplate/checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="../tmplate/about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="../tmplate/blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="../tmplate/contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="../tmplate/cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('../tmplate/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="#">Home</a></span> <span>Wishlist</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
                                    <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from p_order where did='$usr' ");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        
						        <th>Product List</th>
                                                        <th>Dellivery Details</th>
						        <th>Price</th>
						        <th>Quantity</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
						        <th>Total</th>
                                                        
						      </tr>
						    </thead>
						    <tbody>
                                                        
                                                       <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $sel1=  mysqli_query($dbcon,"select * from pro where id='$r_gal[7]'");
                          $r1=  mysqli_fetch_row($sel1);     
                                                                $i++;
                                                                ?>  
						      <tr class="text-center">
						        
						        <td class="image-prod">
                                                            <h6><?php echo $r1[1] ?></h6>
                                                            
                                                            <div class="img" style="background-image:url(../img2/<?php echo $r1[5] ?>);"></div></td>
						        
                                                                <td><p>
                                                                        <span class="fa fa-user"></span>:<?php echo $r_gal[4] ?> &nbsp; <a href="tel:<?php echo $r_gal[6] ?>"><span class="fa fa-mobile"></span>:<?php echo $r_gal[6] ?> </a>
                                                            </p>
                                                            <p><span class="fa fa-home"></span>:<?php echo $r_gal[5] ?></p>
                                                        </td>
						        
                                                        <td class="price"><?php echo $r_gal[2]  ?> Rs/-</td>
						        
						        <td >
						        	
                                                            <span class="btn btn-success"><?php echo $r_gal[1]  ?></span>
					          	
					          </td>
                                                  
                                                  <td class="price">
						        	
					             	<?php echo $r_gal[10]  ?>
					          	
					          </td>
                                                   <td class="price">
						        	
					             	<?php echo $r_gal[11]  ?>
					          	
					          </td>
						        
						        <td class="total"><?php echo $r_gal[3]  ?> Rs/-</td>
                                                        
						      </tr><!-- END TR-->

						      

						      <?php
                                                            }
                                                            ?>

						      

						      
						      
						    </tbody>
						  </table>
                                    
                                    
                                    <?php
                                                        }
                                                        ?>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light" style="display: none">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" required="" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>