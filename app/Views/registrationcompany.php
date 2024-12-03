

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
    <title>supplychain</title>
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
                                    <a href="registration"><img src="/images/logo.png" alt="#" ></a>
                                    
        
                     
                              <h2 class="text-center mb-30 text-white">Developed By Farmer's For Farmer's</h2>
                    
                
                            </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center h-50">
             <div class="col-12 col-md-12 col-lg-12 col-xl-12">
          <div class="card  bg-body" style="border-radius: 15px;">
            <div class="card-body p-12">
              


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><strong class="black">Digital Farmer</strong></h2>
                        </div>
                    </div>
                </div>
                
                <h1 class="text-center mb-30 text-black">
                   “Include Farmers In Digital India” 
                </h1>

             
                      </div>
                 </div>
            </div>
            </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="/icon/loc1.png" />Sangamner</li>
                                <li><img src="/icon/email1.png" />digitalfarmer@gmail.com</li>

                                <li><img src="/icon/call1.png" />(+91)9373768626</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row w-150">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> 
                                                    <centre>
                                                        <a href="registrationcompany" class=" btn-outline-success">Registration </a> </centre>

                                                </li>

                                              
                                                

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

   
   
   

    <!--Login/Signup -->   

    <section class=" mt-5">
        <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-8 col-xl-6">
          <div class="card  bg-success" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5 text-white">CREATE AN ACCOUNT</h2>

              <form action="<?php echo site_url('/companyregisterinsert');?>" method="get">


              <div class="form-outline mb-4">
                <label class="form-label text-white" for="form3Example3cg">Your Name</label>
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg bg-light" name="company_name" />
                </div>
               

                <div class="form-outline mb-4">
                <label class="form-label text-white" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg bg-light" name="email" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg bg-light" name="password" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="form3Example4cg">Repeat your Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg bg-light"  name="repeat_password" />
                </div>



               
         
           
                  
        



               <div class="form-check d-flex justify-content-center mb-5">
                  <input type="checkbox"> <label class="text-white mt-2">
                    I agree all terms & conditions<a href="#!" class="text-body ml-1"><u>Terms of service</u></a>
                  </label>
                </div>



                <div class="d-flex justify-content-center">
                  <input type="submit" name="submit" value="REGISTER">
               </div>

               
                <p class="text-center text-white mt-5 mb-0 ">already have an account? <a href="logincompany"class="fw-bold text-body text-white"><u>Login Here</u></a></p>


             

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!--Login/Signup -->   

    

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About Digital Farmer</h2><br><h1><u>Developed By Farmer's For Farmer's</u></h1>
                        <p>We are here to serve farmers with our innovative tips & techniques.Our main motive is to introduce new technologies to our farmer friends.In our system farmers can directly supply their products to manufacturing company.
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="/images/farmer.jpg" class="img-fluid border border-5 border-dark rounded" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->


    
    <!--  footer -->
   
    <footer>
        <div class="footer top_layer ">
            <div class="">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                           <figure> <a href="home"> <img src="images/logo.png" alt="logo" /></a>
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
    </footer>
    

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
