<!DOCTYPE html>
<html lang="en">
<script>
$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
</script>

<script src="https://use.fontawesome.com/b40e96cae4.js"></script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lumelec - Wirral's Leading Electrical Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
	
	<!-- Additional CSS -->
	<link href="css/additional.css" rel="stylesheet">

	<!-- Captcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<!-- Gallery -->
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<script src="js/blueimp-gallery.min.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Favicon links -->
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Lumelec Electrical Services</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about-us.php">About Us</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
					<li>
                        <a href="testimonials.php">Testimonials</a>
                    </li>
					<li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
						<div class="item active">
						  <img src="images/header-one.jpg" alt="wirral electrician installation free quote">
						</div>

						<div class="item">
						  <img src="images/header-two.jpg" alt="wirral electrician installation free quote">
						</div>

						<div class="item">
						  <img src="images/header-three.jpg" alt="wirral electrician installation free quote">
						</div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="sr-only">Next</span>
					  </a>
					</div>
            </div>

            <div class="col-md-4">
				<div class="form-area">  
					<form role="form" method="post" action="sent.php">
					<br style="clear:both">					
								<h2 style="margin-bottom: 25px; text-align: center;color:#009ce6;">Instant Quick Quote</h2>
								<div class="form-group">	
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
								</div>
								<div class="form-group">
								<textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="5"></textarea>                   
								</div>
					<button href="#" type="button" value="submit" id="submit" name="submit" class="btn pull-right g-recaptcha" data-sitekey="6Lc3RSkUAAAAAEzwkQQK7riO5vMNy_AQJl4fw5lK" data-callback="YourOnSubmitFn" style="background-color: #009ce6; border=white; color: white; padding-bottom:5px;">Submit Form</button>
					</form>
				</div>
            </div>

        </div>
	
   