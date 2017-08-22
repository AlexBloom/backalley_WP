<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package backalley
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer cf bg-black-9 white-9 text-center p-l">
	  <div class="cf">
		  <div class="col col-12 m-col-4 text-center">
		    <svg style="width:4rem; height:4rem;">
		      <use xlink:href="#seek" />
		    </svg>
		    <h2 class="caps">
		      Seek
		    </h2>
		    <p>100 Boyd Street<br>
		       Carrboro, NC 27510<br>
		       <a href="#">google maps</a>
		    </p>
		  </div>
		  <div class="col col-12 m-col-4 text-center">
		    <svg style="width:4rem; height:4rem;">
		      <use xlink:href="#contact" />
		    </svg>
		    <h2 class="caps">
		      Contact
		    </h2>
		    <p><a href="mailto:email@backalleybikes.net"><span class="white">email@backalleybikes.net</span></a><br>
		       <a href="tel:919-967-7777"><span class="white">919-967-7777</span></a>
		    </p>
		  </div>
		  <div class="col col-12 m-col-4 text-center">
		    <svg style="width:4rem; height:4rem;">
		      <use xlink:href="#follow" />
		    </svg>
		    <h2 class="caps">
		      Follow
		    </h2>
		    <p><a href="" class="white hover-purple">Instagram</a><br>
		       <a href="" class="white hover-purple">Facebook </a><br>
		    </p>
		  </div>
	  </div>
	  <div class="cf gold border-top-dotted pt-l">
	    <p>Copyright © 2015–2017, Back Alley Bikes | Site by <a class="white hover-purple" href="http://alexbloom.co">Alex Bloom</a></p>
	  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
