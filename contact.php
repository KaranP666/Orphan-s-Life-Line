<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Contact | Orphans's LifeLine | Charity</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <?php
        include 'database.php';

        if(isset($_POST['send']))
        {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Message = $_POST['Message'];
            send($Name,$Email,$Message);
            //link otp timeing part then payment
        }
    ?>


    </head>
    <body>
    
	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				Orphans's LifeLine | Charity
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

					<form action="" class="contact-form ajax-form" method="post">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="Name" id="Name" class="form-control" placeholder="Name*" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="Email" id="Email" class="form-control" placeholder="E-mail*" required>
	                        </div>
							
						</div>

                        <div class="form-group">
                            <textarea name="Message" id="Message" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>

                        <!-- <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	 -->

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right" name="send">Send message</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> Orphan's LifeLine CONTACTS <span class="title-under"></span></h2>
					<p>
						<b>Orphans's LifeLine</b>
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Mumbai</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 00 210 25 55  55 11</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> contact@OrphansCharity.org</li>
						</ul>
					</div>
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>
        <!-- jQuery -->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script> -->

        <!-- Bootsrap javascript file -->
        <!-- <script src="assets/js/bootstrap.min.js"></script> -->


        <!-- Google map  -->
        <!-- <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script> -->


        <!-- Template main javascript -->
        <!-- <script src="assets/js/main.js"></script> -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script> -->
    </body>
</html>
