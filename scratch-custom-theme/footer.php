<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="site-footer">
		<section id="footer">

	<footer>
		<section class="title flex-item">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/dog-training-logo-520.png">
			<p>
				<!-- Inquiry Email Address -->
				<a href="mailto:inquiries@dogtrainers.com">inquiries@dogtrainers.com</a>
			</p>
			<p>
					<a href="tel:5164570531">(123)456-7890</a>
				</p>
			<address>
				Lorem ipsum dolor, LLC<br />
				92 Lulu Street<br />
				Bellingham Washington, 11568<br />
			</address>
			<button type="button" class="nav-button" onclick="openForm()">Contact</button>
		</section>
		
		<section class="links">
			<ul class="page-links">
				<li><a href="#">Home</a></li>
				<li><a href="#post">Why Us?</a></li>
				<li><a href="#team">The Team</a></li>
				<li><a href="#how-we-work">How We Work</a></li>
				<li><a href="#testimonials">Testimonials</a></li>
			</ul>
		</section>
		<div class="copyright-wrap">
			<div class="container">
				<div class="copyright-inner">
					<p class="copyright-text">© Copyright <span id="homeYear"></span> Web Design and Development By <a href="https://monteamador.com" target="_blank">Monte Amador</a></p>
				</div>
			</div>
			<!--// .container //-->
		</div>
	</footer>	
</section>

	</section>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
