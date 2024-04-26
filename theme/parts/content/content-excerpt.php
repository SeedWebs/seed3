<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
        if (is_sticky() && is_home() && !is_paged()) {
            printf('%s', esc_html_x('Featured', 'post', '_tw'));
        }
        the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
?>
	</header>
	<?php _tw_post_thumbnail(); ?>
	<div <?php _tw_content_class('entry-content'); ?>>
		<?php the_excerpt(); ?>
	</div>
	<footer class="entry-footer">
		<?php _tw_entry_footer(); ?>
	</footer>
</article>