<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
$pageTitle = "Contact Us!";
$section = null;
include("Templates/EditorPageHeaderMain.php");
?>

	<!-- //header -->
	<!-- banner -->
	<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="home.php">Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

	<!-- contact -->
	<div class="container">
		<!-- mail -->
	<div class="banner-bottom">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Contact</h3>
				<p class="agileinfo_para">Nam tempus lobortis sem non ornare in aliquet egestas, nisi mi vestibulum.</p>
			</div>
			<div class="agile-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9937.636130696019!2d-0.3293134!3d51.487361!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7cc3b89c3e0e13f2!2sSky!5e0!3m2!1sen!2suk!4v1492241657803" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>"  frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="w3ls_portfolio_grids w3_agile_mail_grids">	
				<form action="#" method="post">
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						<input type="submit" value="Submit">
					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						<textarea name="Message" placeholder="Your message here..." required=""></textarea>
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		
	</div>
<!-- //mail -->

	</div>
	<!-- //contact -->
	<!-- footer -->
	<?php
        include("Templates/EditorPageFooter.php");
        ?>