<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inmode
 */

get_header();
?>
<div class="container-fluid fixed_width single-page_content">
	<main id="primary" class="site-main mb-5">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		

		endwhile; 
		?>

	</main><!-- #main -->
</div>
<?php
//get_sidebar();
get_footer();
