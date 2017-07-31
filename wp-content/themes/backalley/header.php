<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package backalley
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'backalley' ); ?></a>

	<!-- Notification -->

	

	<div class="notification bg-gold px-l py-m text-center">
		<span class="sans black bold h5">Heads Up! The Shop is CLOSED till further notice for a power outage. Controlled by toggle in back end.</span>
	</div>

	<header id="masthead" class="site-header relative bg-black white px-l cf ">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->



			<div class="col top-0 right-0 s-hide s-m-hide text-center">
				<p><a href="mailto:email@backalleybikes.net"><span class="gold">email@backalleybikes.net</span></a><br>
					 <a href="tel:919-967-7777"><span class="gold">919-967-7777</span></a>
				</p>
			</div>
			<div class="absolute top-0 right-0 s-hide s-m-hide text-center gold">
				<p>100 Boyd St. Carrboro, NC 27510 <br>
						M-F: 10-7, Sat: 11-6, Sun: CLOSED
				</p>
			</div>
			<div class="col-12 text-center max-width-s mx-auto">
				<a href="{{site.baseurl}}/" class="">
						<div class="logo mt-m mx-auto text-center s-hide s-m-hide" style="width:6rem; height:6rem;">
							<svg version="1.1" id="Logo" x="0px" y="0px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
							<path fill="#C39A5A" d="M134.591,138.725c0.253-2.457-0.235-4.627-0.387-6.933c-0.302-4.812-0.101-9.676-0.168-14.505
								c-0.084-5.014-0.354-10.045-0.337-15.06c0-1.48,0.741-2.962,1.195-4.679c-0.32-0.925-1.212-2.288-1.229-3.651
								c-0.051-6.377,0.151-12.755,0.219-19.115c0.067-6.579,0.689-13.225-0.05-19.704c-0.539-4.695-3.063-9.138-4.46-13.765
								c-2.002-6.664-6.579-11.207-12.099-14.808c-4.846-3.163-9.052-6.563-10.533-12.485c-0.454-1.784-1.615-3.365-3.837-3.079
								c-3.719,0.487-5.249,1.885-5.132,4.846c0.202,4.964-1.784,8.935-4.964,12.519c-1.716,1.935-3.719,3.803-4.762,6.091
								c-1.935,4.24-3.736,8.65-4.694,13.192c-1.246,5.806-1.801,11.796-2.272,17.735c-0.337,4.225-0.185,8.498-0.016,12.755
								c0.101,2.574,0.185,2.708-2.373,2.675c-0.672,0-1.38,0.018-2.019-0.151c-4.678-1.245-9.39-2.373-14-3.836
								c-9.609-3.029-19.301-1.717-25.88,6.68c-3.029,3.887-4.459,11.711-1.817,15.413c1.413,1.969,2.339,2.439,4.425,1.195
								c2.827-1.683,5.637-3.382,8.33-5.266c1.665-1.162,3.179-1.212,4.728-0.051c2.676,2.02,3.652,4.391,1.161,7.37
								c-0.623,0.74-1.414,1.312-2.171,1.918c-1.75,1.414-3.567,2.727-5.25,4.19c-1.817,1.599-1.902,3.467-0.068,5.015
								c5.099,4.307,11.14,4.509,17.164,2.994c5.62-1.413,9.474-5.703,13.478-9.641c1.246-1.229,2.911-2.02,4.392-3.013
								c0.219,0.169,0.438,0.319,0.656,0.487c0.118,4.611,0.303,9.223,0.269,13.833c0,0.571-1.026,1.515-1.699,1.648
								c-2.188,0.472-4.409,0.79-6.646,0.909c-3.77,0.201-5.335,1.43-5.52,5.048c-0.151,3.028-0.034,6.074-0.034,9.271
								c-0.202,0-0.79-0.05-1.363,0c-3.483,0.353-6.983,0.622-10.432,1.144c-2.321,0.336-3.13,1.582-2.81,3.266
								c0.622,3.516,1.413,7.032,1.682,10.583c0.336,4.543,2.692,6.108,7.287,6.024c4.307-0.067,8.614-0.641,12.939-0.656
								c7.37-0.018,14.74,0.269,22.109,0.336c11.072,0.084,22.145,0.102,33.217,0.102c2.659-0.018,4.24-1.918,4.122-4.543
								C134.727,146.92,134.154,142.763,134.591,138.725z M127.322,116.58c-12.89,0.59-25.695,1.178-38.719,1.783
								c-0.134-2.523-0.252-4.71-0.386-7.234c12.888-0.27,25.626-0.539,38.617-0.824C126.985,112.29,127.138,114.259,127.322,116.58z
								 M126.768,105.105c-12.738,0.252-25.493,0.521-38.466,0.789c-0.118-0.841-0.168-1.631-0.353-2.404
								c-0.32-1.364,0.218-1.938,1.582-2.021c8.582-0.538,17.146-1.228,25.744-1.615c3.703-0.151,7.455,0.304,11.494,0.505V105.105z
								 M103.546,22.956c2.086,2.306,3.972,4.577,6.059,6.664c3.062,3.062,6.427,5.805,9.321,9.002c1.75,1.953,2.827,4.477,4.207,6.748
								c-0.085,0.185-0.168,0.354-0.254,0.539c-11.458-4.83-22.648-6.377-33.349,3.045C92.34,38.874,98.667,31.538,103.546,22.956z
								 M91.615,54.456c3.551-4.207,8.465-5.569,14.791-5.654c6.765,0.909,13.9,3.08,18.98,9.557c1.162,1.481,0.623,3.719-1.244,5.032
								c-4.342,3.062-9.322,4.409-14.471,4.83c-5.806,0.454-11.511-0.438-16.508-3.786C87.645,60.749,87.359,59.454,91.615,54.456z
								 M87.847,69.078c12.3,7.303,24.702,6.832,37.237,0.572c0.236,3.265,0.455,6.377,0.69,9.76c-12.755,0.32-25.224,0.623-37.928,0.942
								V69.078z M78.104,97.954c-1.969,0.976-3.786,2.338-5.502,3.718c-3.147,2.524-6.092,5.301-9.289,7.74
								c-2.793,2.138-6.108,1.969-9.793,1.481c2.187-2.021,4.189-3.584,5.838-5.47c3.365-3.803,3.618-7.319,0.539-11.24
								c-2.895-3.685-6.529-6.461-11.628-6.041c-1.127,0.084-2.321,0.488-3.281,1.078c-1.699,1.026-3.231,2.288-5.2,3.718
								c0.304-5.115,3.248-7.673,6.799-9.827c5.502-3.315,11.054-2.474,16.557-0.168c7.252,3.062,14.707,3.921,22.582,3.399
								c10.449-0.673,20.949-0.656,31.433-1.01c2.979-0.101,5.956-0.438,9.138-0.69v9.138c-2.29,0-4.646-0.068-7,0.016
								c-8.583,0.27-17.147,0.573-25.729,0.909C88.25,94.924,82.95,95.564,78.104,97.954z M75.075,126.408
								c0.067-0.354,0.656-0.842,1.06-0.893c6.479-0.959,12.94-2.188,19.468-2.676c7.521-0.555,15.11-0.403,22.666-0.622
								c2.389-0.067,4.778-0.286,7.151-0.522c1.498-0.168,2.036,0.455,2.002,1.886c-0.033,2.607,0,5.198,0,8.042H74.587
								C74.756,129.789,74.84,128.09,75.075,126.408z M129.021,150.252c-4.829,0-9.523,0.049-14.201-0.018
								c-7.32-0.068-14.64-0.354-21.977-0.287c-9.339,0.068-18.694,0.354-28.032,0.707c-2.054,0.068-2.811-0.555-2.911-2.54
								c-0.119-2.39-0.472-4.763-0.758-7.438c22.531-2.002,45.045-2.961,67.879-1.9V150.252z M104.963,185.838
								c0.342,1.519,0.045,2.88-1.501,3.167c-1.542,0.288-3.251-0.093-3.749-1.986c-0.471-1.796-0.764-3.645-1.021-5.487
								c-0.374-2.646-0.646-5.304-0.963-7.957c-0.176-0.093-0.351-0.188-0.524-0.279c0.614-0.781,1.11-2.07,1.862-2.242
								c1.906-0.436,3.423,0.744,3.877,2.513c0.789,3.078,1.231,6.247,1.768,9.388C104.873,183.902,104.752,184.904,104.963,185.838z
								 M147.835,172.941c-0.713,0.703-2.004,1.103-3.042,1.108c-0.855,0.003-1.793-0.665-2.556-1.22c-1.507-1.095-3.03-2.209-4.32-3.535
								c-0.659-0.68-1.269-1.924-1.099-2.744c0.156-0.752,1.394-1.279,2.033-1.805c1.225,0.367,2.033,0.421,2.605,0.814
								c2.014,1.379,3.95,2.869,5.907,4.325C148.525,170.75,148.771,172.02,147.835,172.941z M83.125,175.169
								c-0.889,2.12-2.015,4.149-3.142,6.159c-1.031,1.838-2.572,1.207-4.121,0.738c-1.826-0.553-1.026-1.92-0.715-2.74
								c0.921-2.427,2.058-4.782,3.271-7.081c0.276-0.522,1.207-0.7,1.481-0.847C82.64,171.332,84.01,173.058,83.125,175.169z
								 M60.005,167.061c-1.585,2.247-3.214,4.468-4.892,6.647c-1.048,1.36-2.167,0.224-3.168-0.155c-0.551-0.207-0.938-0.846-1.638-1.524
								c1.314-2.031,2.43-3.841,3.642-5.583c0.549-0.789,1.371-1.386,1.925-2.171c0.979-1.394,2.134-1.159,3.277-0.417
								C60.336,164.627,60.946,165.726,60.005,167.061z M126.059,176.654c0.437,0.597,0.73,1.796,0.418,2.316
								c-0.402,0.668-1.596,1.424-2.244,1.271c-1.342-0.318-2.65-1.072-3.78-1.903c-1.063-0.782-2.075-1.784-2.743-2.905
								c-0.457-0.771-0.617-2.043-0.301-2.852c0.259-0.663,1.419-0.975,2.339-1.54c1.089,0.67,2.112,1.108,2.882,1.819
								C123.876,174.02,125.059,175.284,126.059,176.654z M102.709,60.478c0.129-1.507,0.43-3.177,1.221-4.416
								c1.398-2.191,4.901-1.883,7.24,0.38c1.729,1.672,1.568,3.603-0.652,5.517c-1.13,0.973-2.491,1.676-3.746,2.502
								C105.104,64.011,102.59,61.872,102.709,60.478z"/>
							</svg>

						</div>
						<h1 class="heading h4 m-h3 mb-0 caps"><span class="white">Back Alley Bikes</span></h1>
				</a>
			</div>


<!-- dynamic  -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'backalley' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->

<!-- static -->
		  <nav class="text-center sans">
		    <a href="{{site.baseurl}}/bikes"   class="inline-block link p-m"> <span class="white">Bikes</span></a>
		    <a href="{{site.baseurl}}/service" class="inline-block link p-m"> <span class="white">Service</span></a>
		    <a href="{{site.baseurl}}/news"    class="inline-block link p-m"> <span class="white">News</span></a>
		  </nav>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
