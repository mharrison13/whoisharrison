<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- My Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css">
		<link rel="stylesheet" href="css/grid.css" type="text/css">

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<script src="js/code.jquery.com/jquery-3.2.1.min.js"></script>
		<![endif]-->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/custom-nav.js" type="text/javascript"></script>

		<!-- jQuery Form, Additional Methods, Validate for contact-->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<title>Whois Harrison</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<?php require_once("lib/header.php");?>

			<!-- My Welcome Section -->
			<section id="intro">
				<div class="container" id="welcome">
					<div class="row">
						<div class="col-md-12">
							<div class="whois">
								<h1>Michael Harrison Web Developer</h1>
								<p>With over 15 years of experience, I specialize in web development with extensive
									background in digital marketing & multimedia development. Most recently I’ve enrolled in the
									STEMulus bootcamp coders program to further my knowledge of Angular & LAMP. </p>
								<a href="#contact-form" class="btn btn-primary"> Yes, I'm available for
										hire</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Photo and Text Section -->
			<section class="portfolio">
				<a name="portfolio"></a>
				<div class="container" id="gallery">
					<h2>Recent Work</h2><br>
					<p>
						<a href="images/port1.png" data-fancybox="images" id="webexample">
							<img src="images/port1m.png" alt="tattoo marque"/>
						</a>

						<a href="images/port2.png" data-fancybox="images" id="webexample">
							<img src="images/port2m.png" alt="Care Guide"/>
						</a>

						<a href="images/port3.png" data-fancybox="images" id="webexample">
							<img src="images/port3m.png" alt="Off Road Ex/>
						</a>

						<a href="images/port4.png" data-fancybox="images" id="webexample">
							<img src="images/port4m.png" alt="Abq Dental"/>
						</a>

						<a href="images/port5.png" data-fancybox="images" id="webexample">
							<img src="images/port5m.png" alt="Green Card Landscaping"/>
						</a>

						<a href="images/port9.png" data-fancybox="images" id="webexample">
							<img src="images/port9m.png" alt="Ryan Roberts"/>
						</a>

						<a href="images/port7.png" data-fancybox="images" id="webexample">
							<img src="images/port7m.png" alt="Rex Goes Racing"/>
						</a>

						<a href="images/port8.png" data-fancybox="images" id="webexample">
							<img src="images/port8m.png" alt="Robin Waynee"/>
						</a>
				</div>
			</section>

			<!-- Contact Section -->
			<section id="message-form">
				<a name="contact-form"></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3>Contact</h3>
							<!--Begin Contact Form-->
							<form id="contact-form" action="php/mailer.php" method="post">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="5" id="message" name="message"
													 placeholder="Message (2000 characters max)"></textarea>
									</div>
								</div>
								<!-- reCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6LdI0SMUAAAAAMAVsMAUzN1NDiyhVCUIm6L7MYhd"></div><br>
								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>
						</div>
					</div>
					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div><!--/.container-->
			</section>

			<!-- client logos -->
			<section class="client-logos">
				<div class="container clients">
					<div class="row">
						<ul>
							<li class="two columns"><img src="images/client-logo-1.png" alt="Animal Humane"
																  class="scale-with-grid"></li>
							<li class="two columns"><img src="images/client-logo-2.png" alt="Duke Tattoo Fiesta"
																  class="scale-with-grid"></li>
							<li class="two columns"><img src="images/client-logo-3.png" alt="Robing Waynee"
																  class="scale-with-grid"></li>
							<li class="two columns"><img src="images/client-logo-4.png" alt="Heritage Hotels"
																  class="scale-with-grid"></li>
							<li class="two columns"><img src="images/client-logo-5.png" alt="Fitshop" class="scale-with-grid">
							</li>
							<li class="two columns"><img src="images/client-logo-7.png" alt="Lorencos" class="scale-with-grid">
							</li>
							<li class="two columns"><img src="images/client-logo-8.png" alt="Lobo Club"
																  class="scale-with-grid">
							</li>
						</ul>
					</div>
				</div>
			</section>

			<?php require_once("lib/footer.php");?>

	</body>
</html>