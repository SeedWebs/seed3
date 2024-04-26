<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
        if (!is_front_page()) {
            the_title('<h1 class="entry-title">', '</h1>');
        }?>
	</header>
	<?php _tw_post_thumbnail(); ?>
	<div <?php _tw_content_class('entry-content'); ?>>
		<?php the_content(); ?>
	</div>
	<?php if (get_edit_post_link()) : ?>
	<footer class="entry-footer">
		<?php
    edit_post_link(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers. */
                __('Edit <span class="sr-only">%s</span>', '_tw'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        )
    );
	    ?>
	</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->