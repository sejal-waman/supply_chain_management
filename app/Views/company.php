
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
    <link rel="icon" type="image/x-icon" href="">
    <title>Digital Farmer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/login.css');?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo base_url('images/fevicon.png');?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.mCustomScrollbar.min.css');?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  <style>

    .block1
    {
      text-align:center;
      display:inline-block;
      font-size:20px;
      margin: 10px 10px;
      cursor:pointer;
      width:200px;
      background-attachment:fixed;
      background-color:black;
     }
  .block2
  {
    text-align:center;
      display:inline-block;
      font-size:20px;
      margin: 10px 10px;
      cursor:pointer;
      width:200px;
      background-attachment: fixed;
      background-color:black;
  }

</style>


</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
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
                                    <a href="company"><img src="/images/logo.png" alt="#" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="/icon/loc1.png" />Sangamner</li>
                                <li><img src="/icon/email1.png" />digitalfarmer@gmail.com</li>

                                <li><img src="/icon/call1.png" />(+91)1234567890</li>
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
											  
                                                <li><a href="dashboard" class=" btn-outline-success">Logout</a></li>
                                                <li><a href="company" class=" btn-outline-success">Company</a></li>
                                               
                                              
                                               
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="/images/search_icon.png"></button>
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
  
    <!-- product -->
    <div id="company" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><strong class="black"><strong class="black"><h2>Digital Farmer</h2></strong>Feedstocks</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="product_box">
                                <a href="company"><figure><img src="/images/fruits.jpeg" alt="#" />
								

               <li class="active"> 
	                <centre>
		              <a  class=" btn-outline-success"> <h3>Fruits</h3></figure>  </a> </centre>
            <span>
          	
            
              <button type="button" class="block block2"><a href="viewcompanyfruit" class="btn btn-black py-12 px-12 bg-success btn-outline-dark"><h1>view</h1></a></button>
            </span>
              </li>

                                  
                            </div>
                        </div>
                         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="product_box">
                            <a href="company"><figure><img src="/images/foodgrains.jpeg" alt="#" />
								

                                <li class="active"> 
                                     <centre>
                                       <a  class=" btn-outline-success"> <h3>Foodgrains</h3></figure>  </a> </centre>
                             <span>
                               
                             
                               <button type="button" class="block block2"><a href="viewcompanygrain" class="btn btn-black py-12 px-12 bg-success btn-outline-dark"><h1>view</h1></a></button>
                             </span>
                               </li>
                 
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="product_box">
                               
                            <a href="company"><figure><img src="/images/spent_grain.jpeg" alt="#" />
								

                                <li class="active"> 
                                     <centre>
                                       <a  class=" btn-outline-success"> <h3>Spent Grain</h3></figure>  </a> </centre>
                             <span>
                               
                             
                               <button type="button" class="block block2"><a href="viewcompanyspentgrain" class="btn btn-black py-12 px-12 bg-success btn-outline-dark"><h1>view</h1></a></button>
                             </span>
                               </li>
                                    
                            </div>
                        </div>
                    
               
                
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                <a href="company"><figure><img src="/images/vegetables.jpeg" alt="#" />
                                
                                <li class="active"> 
                                     <centre>
                                       <a  class=" btn-outline-success"> <h3>Vegetables</h3></figure>  </a> </centre>
                             <span>
                              
                             
                               <button type="button" class="block block2"><a href="viewcompanyvegetable" class="btn btn-black py-12 px-12 bg-success btn-outline-dark"><h1>view</h1></a></button>
                             </span>
                               </li>
                                    
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                
                         <a href="company"> <figure>
                            <img src="/images/flower.jpeg" alt="#" />
                           
                            <li class="active"> 
                                     <centre>
                                       <a  class=" btn-outline-success"> <h3>Flowers</h3></figure>  </a> </centre>
                             <span>
                               
                             
                               <button type="button" class="block block2"><a href="viewcompanyflower" class="btn btn-black py-12 px-12 bg-success btn-outline-dark"><h1>view</h1></a></button>
                             </span>
                               </li>
                               
                            </div>
                        </div>
                        
                        
                    
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->


   <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                           <figure> <a href="company"> <img src="/images/logo.png" alt="logo" /></a>
                            <h5 class="text-white text-center">"Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals & happiness."  </h5>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="/icon/3.png" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="/icon/3.png" alt="#" /> <a href="#">Our Cummunity</a> </li>
                                <li><img src="/icon/3.png" alt="#" /> <a href="#">Our Services</a></li>
                                <li><img src="/icon/3.png" alt="#" /> <a href="#">Our Products</a> </li>
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
                                    <a href="#"><img src="/icon/loc.png" alt="#" /></a>Sangamner
                                    <br>India </li>
                                <li>
                                    <a href="#"><img src="/icon/email.png" alt="#" /></a>digitalfarmer@gmail.com </li>
                                <li>
                                    <a href="#"><img src="/icon/call.png" alt="#" /></a>+91 1234567890 </li>
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
                <p>© 2022 All Rights Reserved.</p>
           
        </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?php echo base_url('js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('js/jquery-3.0.0.min.js');?>"></script>
    <script src="<?php echo base_url('js/plugin.js');?>"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url('js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script src="<?php echo base_url('js/custom.js');?>"></script>
    <!-- javascript -->
    <script src="<?php echo base_url('js/owl.carousel.js');?>"></script>
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
</body>

</html>