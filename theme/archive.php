<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>
<section id="primary">
	<main id="main" class="container">
		<?php if (have_posts()) : ?>
		<header class="page-header">
			<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
		</header><!-- .page-header -->
		<?php
            // Start the Loop.
            while (have_posts()) :
                the_post();
                get_template_part('parts/content/content', 'excerpt');

                // End the loop.
            endwhile;

		    // Previous/next page navigation.
		    _tw_the_posts_navigation();

		else :

		    // If no content, include the "No posts found" template.
		    get_template_part('parts/content/content', 'none');

		endif;
?>
	</main>
</section>
<?php
get_footer();
?>