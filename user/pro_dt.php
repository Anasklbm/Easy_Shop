<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$date=date('Y-m-d'); 
date_default_timezone_set("Asia/Kolkata"); 
$tim=date("H:i:s A");
$sel=  mysqli_query($dbcon,"select * from user_data where em='$usr'");
                          $r=  mysqli_fetch_row($sel);
  $mid=$_GET['mid'];                      
 $sel1=  mysqli_query($dbcon,"select * from pro where id='$mid'");
                          $r1=  mysqli_fetch_row($sel1);                         
?>
<?php

                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
   $tot=$r1[4]*$t1;
     
    
    
         
    $ins=mysqli_query($dbcon,"insert into p_order values('','$t1','$r1[4]','$tot','$t2','$t3','$t4','$mid','$usr','$r1[6]','$date','$tim','0')");
    
    if($ins>0)
    {
     
                header("location:pro.php?mid=$r1[6]");
            }
    }
        
 
 
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
		<?php
                
                include 'menu.php';
                
                ?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('../tmplate/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	 <h1 class="mb-0 bread">Order Now</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
                            <a href="../img2/<?php echo $r1[5] ?>" class="image-popup"><img src="../img2/<?php echo $r1[5] ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 ftco-animate">
    				<h3><?php echo $r1[1] ?> (<?php echo $r1[3] ?>)</h3>
    				<div class="rating d-flex">
							
							
						</div>
    				<p class="price"><span><?php echo $r1[4] ?> Rs/-</span></p>
                                <p>Your order will recieved within an hour</p>
						<div class="">
                                                    <div class="col-md-10">
                                                        
                                                        <form method="post"enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                Quantity:
                    <input type="text" required="" class="form-control" name="t1"value="1">
                </div>
                <div class="form-group">
                    <input type="text" required="" class="form-control" name="t2" value="<?php echo $r[1] ?>">
                </div>
                
                <div class="form-group">
                    <textarea cols="3"rows="3" class="form-control" name="t3"><?php echo $r[4] ?></textarea>
                </div>
                <div class="form-group">
                    <input type="text" required="" class="form-control" name="t4" value="<?php echo $r[5] ?>">
                </div>
                
                
                
            
                                                        
                                                        
                                                    </div>
							<div class="w-100"></div>
							
	          	<div class="w-100"></div>
	          	
          	</div>
          	<input type="submit" name="sub1" value="BUY NOW" class="btn btn-success" />
    			</div>
    		</div>
</form>
    	</div>
    </section>

    

		
    
    
  

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