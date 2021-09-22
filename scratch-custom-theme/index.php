<?php
/**
 * Main Template File
 *
 *
 * @package Scratch
 */

get_header();
?>

<body id="home">
	
	<section id="main-content" class="uncheck">
		<section class="hero">
			<div class="hero-content">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/polaroid-icon.svg" alt="Gallery" class="polaroid-icon"></a>
				<button type="button" class="hero-button" onclick="openForm()">Call to Action</button>
			</div>
		</section>

		
			<h1 class="site-title">Bellingham Dog Trainers</h1>
			<h2 class="tagline"></strong>Opening a new friendship!</h2>
			<blockquote>
					<h2>"A Simple WordPress theme made from scratch."</h2> 
					<p>Given all the frameworks, visual editors and plugins to quickly spin up a WordPress website, I wanted to make a simple theme from scratch. This minimal theme incorporates a mobile first approach with a custom post type and integrates with Gulp, custom web fonts, responsive design, a lightweight carousel and a purely CSS based responsive menu.</p>
					<footer>
						<cite>— Monte</cite>
					</footer>
				</blockquote>
		
		<section class="blog">	
			<article id="about">
				<img src="<?php echo get_template_directory_uri(); ?>/dist/images/600x900.jpg" class="float-left">
				<p class="overflow">
					Lorem ipsum dolor sit amet consectetur adipiscing elit posuere aliquam neque, lobortis justo tellus nibh nisl pulvinar ligula condimentum montes ridiculus urna, integer quisque sociosqu natoque mollis aliquet commodo potenti diam. Ipsum aenean eu blandit pulvinar scelerisque suscipit lectus, dolor sem vestibulum mollis felis imperdiet venenatis massa, vehicula molestie litora magna lobortis posuere.
				</p>
				
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing, elit dapibus facilisi nulla vivamus consequat sem, magnis leo a at eleifend. Commodo cum est tellus congue fringilla mollis conubia habitant potenti, metus lectus a curabitur tempus venenatis auctor laoreet dolor, mattis lacus leo fusce donec bibendum feugiat ridiculus. Molestie sed pellentesque orci sociosqu risus gravida leo hac, lectus neque nostra rhoncus massa praesent cursus. Vitae montes lobortis adipiscing rhoncus praesent nisi ligula erat dignissim, sodales ornare litora consectetur phasellus fermentum felis sollicitudin hac congue, commodo natoque nascetur fames justo pulvinar quisque urna.
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing, elit dapibus facilisi nulla vivamus consequat sem, magnis leo a at eleifend. Commodo cum est tellus congue fringilla mollis conubia habitant potenti, metus lectus a curabitur tempus venenatis auctor laoreet dolor, mattis lacus leo fusce donec bibendum.
				</p>
			</article>

			<article id="team">
				<!-- COPY -->
				<h2 class="h1">The Team</h2>
				<div class="decoration full-height"></div>

				<p class="overflow">
					Lorem ipsum dolor sit amet consectetur adipiscing elit torquent convallis primis curae congue laoreet ac diam vestibulum egestas nam hac proin pulvinar malesuada porta semper nulla praesent aptent luctus cras leo justo facilisi interdum lectus suscipit aliquam vulputate risus suspendisse sollicitudin fermentum tristique natoque tincidunt condimentum cursus etiam faucibus arcu
				</p>
				
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit torquent convallis primis curae congue laoreet ac diam vestibulum egestas nam hac proin pulvinar malesuada porta semper nulla praesent aptent luctus cras leo justo facilisi interdum lectus suscipit aliquam vulputate risus suspendisse sollicitudin fermentum tristique natoque tincidunt condimentum cursus etiam faucibus arcu.
				</p>

				
				<p class="overflow">
					Lorem ipsum dolor sit amet consectetur adipiscing elit sed commodo netus rutrum cursus odio turpis torquent interdum fermentum vestibulum mi venenatis molestie bibendum primis dui
				</p>
			</article>

			<h3 class="h2 callout">Webfonts, Custom Post Types<br />and More!</h3>

			<article id="bios">
				<p class="bio">
					Lorem ipsum dolor sit amet consectetur adipiscing elit quisque felis leo, odio natoque arcu nascetur venenatis sem taciti hac sociosqu, nisi facilisi tempor praesent conubia tellus pretium ligula semper. Turpis senectus mollis sit velit eu mus commodo eleifend nibh porttitor adipiscing, odio fermentum potenti bibendum iaculis egestas suscipit sapien platea. Malesuada tellus at odio eros platea velit inceptos luctus id, nascetur nam elit curae urna ridiculus proin pellentesque potenti per, metus aenean lorem mattis bibendum tincidunt senectus donec.<span id="dots">...</span>
					<span id="more">
						<br />Lorem ipsum dolor sit amet consectetur adipiscing elit vitae interdum ut a, varius egestas aenean lobortis himenaeos integer augue eleifend congue hendrerit, ornare fringilla sem cubilia praesent nostra dictumst vestibulum vivamus nec. Elementum conubia turpis lorem quisque sociosqu primis volutpat quis dictum ut senectus at sit, potenti interdum accumsan dui lacinia erat sollicitudin commodo libero nam et quam.<br /><br />Lorem ipsum dolor sit amet consectetur adipiscing elit congue lectus tempus faucibus elementum, cursus ornare ultrices sociosqu torquent augue at netus pharetra imperdiet magnis. Rutrum cras fringilla natoque senectus proin ullamcorper molestie elit litora et orci, tempor porta volutpat dolor consectetur donec iaculis nam parturient sociosqu faucibus dictumst, nibh class ligula sollicitudin in primis massa netus tellus rhoncus. Nunc ultrices habitasse aliquam viverra ipsum tortor himenaeos, nec enim ullamcorper suscipit habitant odio. Pulvinar platea hac purus tristique scelerisque mollis urna, feugiat non per et commodo ut.<br /><br />Lorem ipsum dolor sit amet consectetur adipiscing elit nisl habitasse egestas ut aliquet, vestibulum dapibus scelerisque cubilia quam lacus viverra arcu diam platea a. Integer molestie est sit curabitur vestibulum cras nostra augue, placerat aenean ad non felis tincidunt pretium vivamus, purus facilisi montes justo lobortis porta tempus.
					</span> 
				</p>

				 <button onclick="toggleReadMore()" id="readToggle" class="button-dark">Read more</button>

			</article>

			<article id="how-we-work">
				<!-- COPY -->
				<h2 class="h1">How We work</h2>
				<div class="decoration full-height"></div>
				<p class="overflow">
					Lorem ipsum dolor sit amet consectetur adipiscing elit ante mauris sapien aliquet, magna at iaculis ac fringilla mi facilisi scelerisque quis vel. Praesent elementum nunc proin ultrices ipsum venenatis porta ut porttitor bibendum, facilisi turpis interdum tempor aliquet libero himenaeos nulla eros vestibulum sociis, eu senectus dolor nec arcu lacus erat risus felis.
				</p>
				
				<p class="clear">
					Lorem ipsum dolor sit amet consectetur adipiscing, elit commodo torquent taciti aliquet, natoque pulvinar hac fermentum id. Facilisis habitant lacinia lobortis quisque laoreet id platea, pharetra varius nisl blandit torquent faucibus primis morbi, fringilla ullamcorper mattis fames sociis suspendisse.
				</p>
				
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit aliquet erat enim dictum aptent class lectus, in sem montes eros est ullamcorper magnis ornare viverra mi tortor platea sed. Odio inceptos adipiscing purus nam ad torquent malesuada phasellus, egestas tincidunt etiam ultricies euismod curae nullam, mauris taciti elementum praesent suscipit cursus est. Ridiculus habitasse sed a himenaeos hac urna duis interdum, tellus magna phasellus ligula lacus metus quam commodo semper, faucibus auctor fusce consequat mattis sagittis nascetur.
				</p>
			</article>

<!-- Testimonials Section Title -->
<section class="m-py-100 bg-light" id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h2 class="h1 hero-title">Testimonials</h2>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<!-- Testimonials 01 -->
<section class="m-py-75">
	<div class="container">
		<div class="testimonials-v1 text-center">
			<div class="testimonials-v1__item">
				<p>
					"Lorem ipsum dolor sit amet consectetur adipiscing elit, et tortor nam class dignissim condimentum erat, commodo rhoncus nec taciti nullam sapien. Hendrerit felis ornare proin libero dapibus inceptos sociis sociosqu nascetur fringilla elementum mauris himenaeos aliquam, neque ullamcorper interdum aenean arcu vehicula ultrices gravida vitae integer dictum mus pulvinar. Elementum libero phasellus nisl integer cubilia aptent fringilla taciti odio, natoque primis tempus vestibulum interdum arcu vitae lacus, euismod cras varius mollis dis metus volutpat penatibus."
				</p>
				<h4 class="text-uppercase mb-0">
					Lorem ipsum dolor sit, Lorem
				</h4>
			</div>
			
			<div class="testimonials-v1__item">
				<p>
					"Lorem ipsum dolor sit amet consectetur adipiscing elit, et tortor nam class dignissim condimentum erat, commodo rhoncus nec taciti nullam sapien. Hendrerit felis ornare proin libero dapibus inceptos sociis sociosqu nascetur fringilla elementum mauris himenaeos aliquam, neque ullamcorper interdum aenean arcu vehicula ultrices gravida vitae integer dictum mus pulvinar. Elementum libero phasellus nisl integer cubilia aptent fringilla taciti odio, natoque primis tempus vestibulum interdum arcu vitae lacus, euismod cras varius mollis dis metus volutpat penatibus."
				</p>
				<h4 class="text-uppercase mb-0">
					- Lorem, Lorem ipsum dolor
				</h4>
			</div>
			<div class="testimonials-v1__item">
				<p>
					"Lorem ipsum dolor sit amet consectetur adipiscing elit, et tortor nam class dignissim condimentum erat, commodo rhoncus nec taciti nullam sapien. Hendrerit felis ornare proin libero dapibus inceptos sociis sociosqu nascetur fringilla elementum mauris himenaeos aliquam, neque ullamcorper interdum aenean arcu vehicula ultrices gravida vitae integer dictum mus pulvinar. Elementum libero phasellus nisl integer cubilia aptent fringilla taciti odio, natoque primis tempus vestibulum interdum arcu vitae lacus, euismod cras varius mollis dis metus volutpat penatibus."
				</p>
				<h4 class="text-uppercase mb-0">
					- Lorem, <span class="u-text-primary">Lipsum</span>
				</h4>
			</div>
		</div>
	</div>
	</section>
</section>
<!-- End Testimonials 01 -->

<?php get_footer(); ?>
<script type="text/javascript">
	function toggleReadMore() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("readToggle");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline-block";
        }
      }
</script>
</body>
</html>
