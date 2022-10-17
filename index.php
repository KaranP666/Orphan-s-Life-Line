<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Orphans's LifeLine | Charity</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">
            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li class="has-child"><a href="#">ORPHAN</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="create.php"> Admission </a></li>
                         <li class="submenu-item"><a href="donate.php"> Donate </a></li>
                         <!-- <li class="submenu-item"><a href="causes-single.html"> Sign up </a></li>
                         <li class="submenu-item"><a href="causes-single.html"> Login </a></li> -->
                      </ul>

                    </li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <?php
                          session_start();

                          if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                          {
                              //header("location: login.php");
                          }
                          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true)
                          {
                            echo '<li class="nav-item active">';
                              echo "<a class='nav-link' href='#'> $_SESSION[username]</a>";
                              echo'<ul class="submenu">';
                              echo'  <li class="submenu-item"><a href="logout.php"> LOGOUT </a></li>';
                              echo'</ul>';
                        echo'</li>';
                          }else{
                            echo "<li><a href='signup1.php'>SIGNUP</a></li>";
                            echo "<li><a href='login.php' >LOG IN</a></li>";

                          } 
                    ?>
                    
                  </ul>
                  

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="assets/images/slider/home-slider-1.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                  <a href="donate.php" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="assets/images/slider/home-slider-2.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                  <a href="donate.php" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" >DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->




            <div class="item ">

              <img src="assets/images/slider/home-slider-3.jpg" alt="">

              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">Happiness doesn't Result from what we get, but from
                    waht we give</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="donate.php" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>

            </div> <!-- /.item -->

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->
    <div class="section-home home-reasons">

        <div class="container">

            <div class="row">
                
                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="assets/images/reasons/we-fight-togother.jpg" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">We fight together</h3>
                            <h5 class="reason-subtitle">We are humans</h5>
                            
                        </div>

                        <div class="on-hover hidden-xs">
                            
                                <p>For the past 21 years, Miracle Foundation has improved the lives of more than 15,000 orphaned and vulnerable children at more than 300 orphanages in India.

To accomplish this, we developed our revolutionary Thrive Scale™ methodology  based on 5 well being domains and the UN Rights of the Child. This tool allows us to collect and track data across a wide spectrum of health and wellness factors to give every child the chance to reach their full potential. 

After years of on-the-ground experience and careful analysis, we are turning our expertise from orphanages to families and leading a global movement to bring children home whenever possible. We’re also training the social workforce on alternatives to orphanage care, reaching into communities to strengthen Child Protections Committees at the local level, incentivizing youth and identifying vulnerable families long before the need for child placement arises.

We’re also applying our technology and measurement skills to the US Foster Care System, connecting families to vital services through an easy-to-use app and streamlining the complex reporting requirements  that  foster families face.</p>

                                <p> </p>

                                <p</p>
                                
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="assets/images/reasons/we-care-about.jpg" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">WE care about others</h3>
                            <h5 class="reason-subtitle">We are humans</h5>
                            
                        </div>

                        <div class="on-hover hidden-xs">
                          <p>For the past 21 years, Miracle Foundation has improved the lives of more than 15,000 orphaned and vulnerable children at more than 300 orphanages in India.

To accomplish this, we developed our revolutionary Thrive Scale™ methodology  based on 5 well being domains and the UN Rights of the Child. This tool allows us to collect and track data across a wide spectrum of health and wellness factors to give every child the chance to reach their full potential. 

After years of on-the-ground experience and careful analysis, we are turning our expertise from orphanages to families and leading a global movement to bring children home whenever possible. We’re also training the social workforce on alternatives to orphanage care, reaching into communities to strengthen Child Protections Committees at the local level, incentivizing youth and identifying vulnerable families long before the need for child placement arises.

We’re also applying our technology and measurement skills to the US Foster Care System, connecting families to vital services through an easy-to-use app and streamlining the complex reporting requirements  that  foster families face.</p>
                          <p></p>
                          <p</p>
                        </div>


                    </div>
                    
                </div>


            </div>
          
  

        </div>
      

    </div> <!-- /.home-reasons -->

  




    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
