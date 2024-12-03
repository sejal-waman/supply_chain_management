<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <link rel="icon" type="image/x-icon" href="images/weblogo.png">
    <title>Farm-Buddy</title>    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/flaticon/fonts/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="home"><img src="images/logo.png" alt="#" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="icon/loc1.png" />Sangamner</li>
                                <li><img src="icon/email1.png" />farmbuddy@gmail.com</li>

                                <li><img src="icon/call1.png" />(+91)1234567890</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row w-150">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="home" class=" btn-outline-success">Home</a> </li>
                                               
                                                <li><a href="supplier" class=" btn-outline-success">Supplier</a></li>
                                                
                                                <li><a href="product" class=" btn-outline-success">Product</a></li>
												<li><a href="product" class=" btn-outline-success fa-2x"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a></li>
                                                

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <!-- start cart -->
   
    <section class="ftco-section ftco-cart">
			<div class="container mt-5">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center text-dark bg-success">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img"> <img src="images/product-5.jpg"  width="100"height="100"  class="img-fluid " alt="Colorlib Template"> </div></td>
						        
						        <td class="product-name">
						        	<h3>Tomato</h3>
						        	<p>Fresh Vegetables</p>
						        </td>
						        
						        <td class="price">₹120</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">₹120</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img"><img src="images/product-7.jpg"  width="100"height="100"  class="img-fluid " alt="Colorlib Template"></div></td>
						        
						        <td class="product-name">
						        	<h3>Carrot</h3>
						        	<p>Fresh vegetables</p>
						        </td>
						        
						        <td class="price">₹15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">₹15.70</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3 border" placeholder="Enter coupon code">
	              </div>
	            </form>
    				</div>
    				<button><a href="checkout" class="btn btn-black py-3 px-5 bg-success btn-outline-dark"><b>Apply Coupon</b></a></button>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Shipping Address</h3>
    					<p>Enter your destination to get a shipping</p>
  						<form action="#" class="info">
	              <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder= "Your Name" required="required">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="Mobile Number">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="Pin Code">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="Locality">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="Address">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="City/Distric/Town">
	              </div>
                  <div class="form-group">
                      <select name="" onchange="" id="" class="" style="width:250px;">
	<option selected="selected" value="0">--All State--</option>
	<option value="31">A AND N ISLANDS</option>
	<option value="01">ANDHRA PRADESH</option>
	<option value="32">ARUNACHAL PRADESH</option>
	<option value="02">ASSAM</option>
	<option value="03">BIHAR</option>
	<option value="33">CHANDIGARH</option>
	<option value="23">CHHATTISGARH</option>
	<option value="34">DADRA AND NAGAR HAVELI</option>
	<option value="36">DAMAN AND DIU</option>
	<option value="35">DELHI</option>
	<option value="40">GOA</option>
	<option value="04">GUJARAT</option>
	<option value="05">HARYANA</option>
	<option value="06">HIMACHAL PRADESH</option>
	<option value="07">JAMMU AND KASHMIR</option>
	<option value="24">JHARKHAND</option>
	<option value="08">KARNATAKA</option>
	<option value="09">KERALA</option>
	<option value="41">LADAKH</option>
	<option value="37">LAKSHADWEEP</option>
	<option value="10">MADHYA PRADESH</option>
	<option value="11">MAHARASHTRA</option>
	<option value="12">MANIPUR</option>
	<option value="13">MEGHALAYA</option>
	<option value="38">MIZORAM</option>
	<option value="14">NAGALAND</option>
	<option value="15">ODISHA</option>
	<option value="39">PUDUCHERRY</option>
	<option value="16">PUNJAB</option>
	<option value="17">RAJASTHAN</option>
	<option value="22">SIKKIM</option>
	<option value="18">TAMIL NADU</option>
	<option value="26">TELANGANA</option>
	<option value="19">TRIPURA</option>
	<option value="20">UTTAR PRADESH</option>
	<option value="25">UTTARAKHAND</option>
	<option value="21">WEST BENGAL</option>

</select>
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="Landmark">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control text-left px-3 border" placeholder="Optional Phone">
	              </div>
	            </form>
    				</div>
    				<button><a href="checkout" class="btn btn-black py-3 px-5 bg-success btn-outline-dark"><b>Estimate Delivery</b></a></button>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal:-</span>
    						<span> ₹135.70</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery:-</span>
    						<span>FREE</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount:-</span>
    						<span>₹5.70</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total:-</span>
    						<span>₹130</span>
    					</p>
    				</div>
    				<button><a href="checkout.php" class="btn btn-black py-3 px-5 bg-success btn-outline-dark"><b>Proceed to Checkout</b></a></button>
    			</div>
    		</div>
			</div>
		</section>



    <!-- end cart-->
<hr>
   <!--  footer -->
   <footr>
        <div class="footer top_layer ">
            <div class="">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                           <figure> <a href="home"> <img src="images/logos.png" alt="logo" /></a>
                            <h5 class="text-white text-center">"Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals & happiness."  </h5>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="icon/3.png" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Cummunity</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Services</a></li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Products</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>It is very important for the customer to follow us for more information.. </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="icon/loc.png" alt="#" /></a>Sangamner
                                    <br>India </li>
                                <li>
                                    <a href="#"><img src="icon/email.png" alt="#" /></a>farmbuddy@gmail.com </li>
                                <li>
                                    <a href="#"><img src="icon/call.png" alt="#" /></a>+91 1234567890 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Send Message</h3>

                            <form class="">
                       
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            
                        </form>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                <p>© 2022 All Rights Reserved. Design By--ABHI</p>
           
        </div>
        </div>
    </footr>


    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->

    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

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