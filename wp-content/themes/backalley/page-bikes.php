<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package backalley
 */

get_header(); ?>

	<div id="primary" class="">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
			?>

			<script>
		    jQuery(document).ready(function(){

		      jQuery('nav.tabs').each(function(){
		        // For each set of tabs, we want to keep track of
		        // which tab is active and its associated content
		        var $active, $content, $links = jQuery(this).find('a');

		        // If the location.hash matches one of the links, use that as the active tab.
		        // If no match is found, use the first link as the initial active tab.
		        $active = jQuery($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
		        $active.addClass('active');

		        $content = jQuery($active[0].hash);

		        // Hide the remaining content
		        $links.not($active).each(function () {
		          jQuery(this.hash).hide();
		        });

		        // Bind the click event handler
		        jQuery(this).on('click', 'a', function(e){
		          // Make the old tab inactive.
		          $active.removeClass('active');
		          $content.hide();

		          // Update the variables with the new link and content
		          $active = jQuery(this);
		          $content = jQuery(this.hash);

		          // Make the tab active.
		          $active.addClass('active');
		          $content.show();

		          // Prevent the anchor's default click action
		          e.preventDefault();
		        });
		      });
		    });
		  </script>

			<nav class="tabs px-l border-bottom-thin h5 caps">
			  <span class="sans bold gold">TYPES:</span>
			  <a class="inline-block py-m px-s link sans bold" href="#commuter" > Commuter   </a>
			  <a class="inline-block py-m px-s link sans bold" href="#cyclocross" > Cyclocross </a>
			  <a class="inline-block py-m px-s link sans bold" href="#mountain" > Mountain    </a>
			  <a class="inline-block py-m px-s link sans bold" href="#road" > Road    </a>
			  <a class="inline-block py-m px-s link sans bold" href="#bmx"> BMX    </a>
			  <a class="inline-block py-m px-s link sans bold" href="#kids" > Kids</a>
			</nav>

			<div class="content-area max-width-l mx-auto my-xl px-l">
					<div class="slider px-l">

						<div class="slide" id="commuter">
					    <h1 class=""> <?php the_field('commuter_bikes_title'); ?> </h1>
					    <p class="h4"> <?php the_field('commuter_bikes_subtitle'); ?> </p>
					    <div class="relative my-l py-l border-top-thin">
								<?php the_field('commuter_bikes_content'); ?>
					    </div>
					  </div>

						<div class="slide" id="cyclocross">
					    <h1 class=""> <?php the_field('cyclocross_bikes_title'); ?> </h1>
					    <p class="h4"> <?php the_field('cyclocross_bikes_subtitle'); ?> </p>
					    <div class="relative my-l py-l border-top-thin">
								<?php the_field('cyclocross_bikes_content'); ?>
					    </div>
					  </div>

						<div class="slide" id="mountain">
					    <h1 class=""> <?php the_field('mountain_bikes_title'); ?> </h1>
					    <p class="h4"> <?php the_field('mountain_bikes_subtitle'); ?> </p>
					    <div class="relative my-l py-l border-top-thin">
								<?php the_field('mountain_bikes_content'); ?>
					    </div>
					  </div>

						<div class="slide" id="road">
					    <h1 class=""> <?php the_field('road_bikes_title'); ?> </h1>
					    <p class="h4"> <?php the_field('road_bikes_subtitle'); ?> </p>
					    <div class="relative my-l py-l border-top-thin">
								<?php the_field('road_bikes_content'); ?>
					    </div>
					  </div>

						<div class="slide" id="bmx">
					    <h1 class=""> <?php the_field('bmx_bikes_title'); ?> </h1>
					    <p class="h4"> <?php the_field('bmx_bikes_subtitle'); ?> </p>
					    <div class="relative my-l py-l border-top-thin">
								<?php the_field('bmx_bikes_content'); ?>
					    </div>
					  </div>

						<div class="slide" id="kids">
					    <h1 class=""> <?php the_field('kids_bikes_title'); ?> </h1>
					    <p class="h4"> <?php the_field('kids_bikes_subtitle'); ?> </p>
					    <div class="relative my-l py-l border-top-thin">
								<?php the_field('kids_bikes_content'); ?>
					    </div>
					  </div>

					</div>
			</div>
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
