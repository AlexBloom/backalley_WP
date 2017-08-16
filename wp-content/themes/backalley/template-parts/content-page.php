<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package backalley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title h6 caps serif bold section-title">', '</h1>' ); ?>
		<h2 class="h3 m-h2 caps lh-solid section-tagline"> <?php the_field('headline'); ?> </h2>
		<?php the_field('intro_text'); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
