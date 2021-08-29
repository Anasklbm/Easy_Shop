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
   
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $upd1=mysqli_query($dbcon,"update user_data set la='$t1',lo='$t2'where em='$usr'");
    
   
    if($upd1>0)
    {
    
    
      
    
     
                header("location:home.php");
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
		
    	<?php
                
                include 'menu.php';
                
                ?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('../tmplate/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	 <h1 class="mb-0 bread">UPDATE LOCATION</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	
        <div >
            
            <div class="row">
               
                
                <div class="container">
        <center><h3 style="padding: 10px;">UPDATE LOCATION</h3></center>
        <div class="row">
        <div class="col-md-6">
            <form method="post"enctype="multipart/form-data">
                
                <div class="form-group">
                    Search and double click on the map to get Location Details
                    <input id="pac-input" class="form-control" type="text" required="" placeholder="Search Your Location...">
                </div>
                <div class="form-group">
                    <input type="text" required="" name="t1"id="lat" class="form-control"value="">
                </div>
                <div class="form-group">
                    <input type="text" required="" name="t2" id="lng"class="form-control"value="">
                </div>
                <div class="form-group"><center>
                    <input type="submit" name="sub1" value="REGISTER NOW" class="btn btn-success" />
                    </center>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <center><p><b>Double click on the map to get more accuracy</b></p></center>
            <div id="map" style="width: 100%; height: 500px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete"
         async defer></script>
        </div>
        </div>
    </div>
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
  <script src="../tmplate/js/google-map.js"></script>
  <script src="../tmplate/js/google-map.js"></script>
  <script src="../tmplate/js/main.js"></script>
    
  </body>
</html>