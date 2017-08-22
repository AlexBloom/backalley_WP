<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package backalley
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ): ?>

			<section class="py-xl px-l bg-white">
				<div class="slider">
					<!-- slide 1 -->
					<?php if( get_field('homepage_slide_1_toggle') ): ?>
						<div class="slide text-center max-width-l mx-auto">
							<?php
							$homepage_slide_1_image = get_field('homepage_slide_1_image');
							if( !empty($homepage_slide_1_image) ): ?>
								<img src="<?php echo $homepage_slide_1_image['url']; ?>" alt="<?php echo $homepage_slide_1_image['alt']; ?>" />
							<?php endif; ?>
							<h1> <?php the_field('homepage_slide_1_title'); ?> </h1>
							<p class="measure mx-auto my-l">
								<?php the_field('homepage_slide_1_text'); ?>
							</p>
							<p class="cta mt-xl">
								<?php $slide1_link = get_field('homepage_slide_1_link'); ?>
								<a href="<?php echo $slide1_link; ?>" class="button">
									<?php the_field('homepage_slide_1_link_text'); ?>
								</a>
							</p>
						</div>
					<?php endif; ?>
					<!-- slide 2 -->
					<?php if( get_field('homepage_slide_2_toggle') ): ?>
						<div class="slide text-center max-width-l mx-auto">
							<?php
							$homepage_slide_2_image = get_field('homepage_slide_2_image');
							if( !empty($homepage_slide_2_image) ): ?>
								<img src="<?php echo $homepage_slide_2_image['url']; ?>" alt="<?php echo $homepage_slide_2_image['alt']; ?>" />
							<?php endif; ?>
							<h1> <?php the_field('homepage_slide_2_title'); ?> </h1>
							<p class="measure mx-auto my-l">
								<?php the_field('homepage_slide_2_text'); ?>
							</p>
							<p class="cta mt-xl">
								<?php $slide1_link = get_field('homepage_slide_2_link'); ?>
								<a href="<?php echo $slide1_link; ?>" class="button">
									<?php the_field('homepage_slide_2_link_text'); ?>
								</a>
							</p>
						</div>
					<?php endif; ?>
					<!-- slide 3 -->
					<?php if( get_field('homepage_slide_3_toggle') ): ?>
						<div class="slide text-center max-width-l mx-auto">
							<?php
							$homepage_slide_3_image = get_field('homepage_slide_3_image');
							if( !empty($homepage_slide_3_image) ): ?>
								<img src="<?php echo $homepage_slide_3_image['url']; ?>" alt="<?php echo $homepage_slide_3_image['alt']; ?>" />
							<?php endif; ?>
							<h1> <?php the_field('homepage_slide_3_title'); ?> </h1>
							<p class="measure mx-auto my-l">
								<?php the_field('homepage_slide_3_text'); ?>
							</p>
							<p class="cta mt-xl">
								<?php $slide1_link = get_field('homepage_slide_3_link'); ?>
								<a href="<?php echo $slide1_link; ?>" class="button">
									<?php the_field('homepage_slide_3_link_text'); ?>
								</a>
							</p>
						</div>
					<?php endif; ?>
				</div>
			</section>
			<div class="bg-gold">
			<div class="max-width-xl mx-auto">
				<!-- <div class="col-8 py-s mx-auto bg-white stairAscend"></div> -->
				<!-- <div class="col-4 py-s mx-auto bg-white stairAscend"></div> -->
				<!-- <div class="col-2 py-s mx-auto bg-white stairAscend"></div> -->
				<!-- <div class="col-1 py-s mx-auto bg-white keystoneAscend"></div> -->
				<div style="width:96%;" class=" mx-auto py-xs bg-white stairAscend"></div>
				<div style="width:48%;" class=" mx-auto py-xs bg-white stairAscend"></div>
				<div style="width:24%;" class=" mx-auto py-xs bg-white stairAscend"></div>
				<div style="width:12%;" class=" mx-auto py-xs bg-white stairAscend"></div>
				<div style="width:6%; " class=" mx-auto py-xs bg-white stairAscend"></div>
				<div style="width:3%; " class=" mx-auto py-xs bg-white stairAscend"></div>
				<div style="width:1.5%;"class=" mx-auto py-xs bg-white keystoneAscend"></div>
			</div>
			</div>
			<section class="py-xxl px-l bg-gold black">
			<div class="text-center">
				<h5 class="h5 caps">About</h5>
				<h2 class="m-h2 l-h1 caps"><?php the_field('about_title'); ?></h2>
			</div>
			<div class="measure mx-auto">
				<?php the_field('about_text'); ?>
			</div>
			</section>
			<div class="bg-gold px-m">
			<div class="width-100 mx-auto">
				<div style="width:1.5%; " class=" mx-auto py-xs bg-black keystoneDescend"></div>
				<div style="width:3%; " class=" mx-auto py-xs bg-black stairDescend"></div>
				<div style="width:6%; " class=" mx-auto py-xs bg-black stairDescend"></div>
				<div style="width:12%; " class=" mx-auto py-xs bg-black stairDescend"></div>
				<div style="width:24%;" class=" mx-auto py-xs bg-black stairDescend"></div>
				<div style="width:48%;" class=" mx-auto py-xs bg-black stairDescend"></div>
				<div style="width:96%;" class=" mx-auto py-xs bg-black stairDescend"></div>
			</div>
			</div>
			<section class="py-xxl px-l bg-black white">
			<div class="cf max-width-xxl mx-auto">
				<div class="col col-12 m-col-5 p-l">
					<div class="max-width-s mx-auto">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/doors.png" alt="">
					</div>
				</div>
				<div class="col col-12 m-col-7">
					<h5 class="h5 caps">Reviews</h5>
					<h2 class="m-h2 l-h1 lh-solid"><?php the_field('reviews_title'); ?></h2>
					<div class="measure py-l">
						<?php the_field('reviews_content'); ?>
						<q>
							I have been taking my bikes to Jason and Rob for years. They are both very knowledgeable, friendly, and clear about what needs to be repaired, what can wait, what the options are, and the turnaround for getting it done. Since Back Alley is not a corporate affiliate with the goal to sell sell sell, there is no "don't you want to replace this old thing?" conversation. I want to take care of my bike; they want to take care of my bike. We have the same goal before I walk in the door. And they always do a great job. My kind of place.
						</q>
						<p class="credit caps h5 sans bold">
							&mdash; Margaret Fields
						</p>
					</div>
					<p class="">
						<a href="#" class="button mx-m"><span class="white">Google</span></a> <a href="#" class="mx-m button"><span class="white">Yelp</span></a>
					</p>
				</div>
			</div>
			</section>
			<div class="bg-gold px-m">
			<div class="width-100 overflow-hidden mx-auto">
				<div style="width:96%;" class=" mx-auto py-xs bg-black stairAscend"></div>
				<div style="width:48%;" class=" mx-auto py-xs bg-black stairAscend"></div>
				<div style="width:24%;" class=" mx-auto py-xs bg-black stairAscend"></div>
				<div style="width:12%;" class=" mx-auto py-xs bg-black stairAscend"></div>
				<div style="width:6%; " class=" mx-auto py-xs bg-black stairAscend"></div>
				<div style="width:3%; " class=" mx-auto py-xs bg-black stairAscend"></div>
				<div style="width:1.5%;"class=" mx-auto py-xs bg-black keystoneAscend"></div>
			</div>
			</div>

			<section class="py-xxl px-l bg-gold text-center black">
			<h5 class="h5 caps">Our Stock</h5>
			<h2 class="m-h2 l-h1"><?php the_field('brands_title'); ?></h2>
			<div class="cf mx-auto max-width-l">
				<?php
					$brandlink_1 = get_field('brand_logo_1_link');
					$brandlink_2 = get_field('brand_logo_2_link');
					$brandlink_3 = get_field('brand_logo_3_link');
				?>
				<div class="col col-4">
					<a href="<?php echo $brandlink_1 ?>" class="link">
						<?php
						$brand_logo_1 = get_field('brand_logo_1');
						if( !empty($brand_logo_1) ): ?>
							<img src="<?php echo $brand_logo_1['url']; ?>" alt="<?php echo $brand_logo_1['alt']; ?>" />
						<?php endif; ?>
					</a>
				</div>
				<div class="col col-4">
					<a href="<?php echo $brandlink_2 ?>" class="link">
						<?php
						$brand_logo_2 = get_field('brand_logo_2');
						if( !empty($brand_logo_2) ): ?>
							<img src="<?php echo $brand_logo_2['url']; ?>" alt="<?php echo $brand_logo_2['alt']; ?>" />
						<?php endif; ?>
					</a>
				</div>
				<div class="col col-4">
					<a href="<?php echo $brandlink_3 ?>" class="link">
						<?php
						$brand_logo_3 = get_field('brand_logo_1');
						if( !empty($brand_logo_3) ): ?>
							<img src="<?php echo $brand_logo_3['url']; ?>" alt="<?php echo $brand_logo_3['alt']; ?>" />
						<?php endif; ?>
					</a>
				</div>
			</div>
			</section>
			<div class="bg-gold">
			<div class="width-100 mx-auto">
				<div style="width:1.5%;"class=" mx-auto py-xs bg-white keystoneDescend"></div>
				<div style="width:3%; " class=" mx-auto py-xs bg-white stairDescend"></div>
				<div style="width:6%; " class=" mx-auto py-xs bg-white stairDescend"></div>
				<div style="width:12%;" class=" mx-auto py-xs bg-white stairDescend"></div>
				<div style="width:24%;" class=" mx-auto py-xs bg-white stairDescend"></div>
				<div style="width:48%;" class=" mx-auto py-xs bg-white stairDescend"></div>
				<div style="width:96%;" class=" mx-auto py-xs bg-white stairDescend"></div>
			</div>
			</div>
			<section class="py-xl px-l bg-white text-center black">
			<h5 class="h5 caps"><a href="http://instagram.com/backalleybikes">@backalleybikes</a></h5>
			<h2 class="m-h2 l-h1"><?php the_field('social_title'); ?></h2>
			<div class="cf py-l mx-auto max-width-xl">
				<?php the_field('social_content'); ?>
			</div>
			</section>
		<?php else:

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
