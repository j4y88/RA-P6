<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
<footer class="footerBG flex flex-col flex-center-a">
	<div class="flex flex-row width90 marginH10">
		<div class="flex flex-col padding10">
			<h4 class="orange-color marginV10">CONTACT INFO</h4>
			<p class="white-color marginV10"><i class="white-color fa fa-envelope" aria-hidden="true"></i> info@inhabitent.com</p>
			<p class="white-color marginV10">778-456-7891</p>
			<div class="flex flex-row marginV10">
				<i class="white-color fa fa-facebook-square" aria-hidden="true"></i>
				<i class="white-color marginH10 fa fa-twitter-square" aria-hidden="true"></i>
				<i class="white-color fa fa-google-plus-square" aria-hidden="true"></i>
			</div>
		</div>
		<div class="flex flex-row flex-grow">
			<div class="flex flex-col flex-grow padding10">
				<h4 class="orange-color marginV10">BUSINESS HOURS</h4>
				<p class="white-color marginV10">Monday-Friday:9am to 5pm</p>
				<p class="white-color marginV10">Saturday: 10am to 2pm</p>
				<p class="white-color marginV10">Sunday: Closed</p>
			</div>
			<div>
			<?php echo "<img src='".get_bloginfo("stylesheet_directory")."/assets/images/logos/inhabitent-logo-text.svg' class='height40px padding10 marginV10'>"; ?>
			</div>
		</div>
	</div> 
	<h6 class="white-color padding10 footerFineSpacing">COPYRIGHT &copy; 2017 INHABITANT</h6>
</footer>
			
		<?php wp_footer(); ?>

	</body>
</html>
