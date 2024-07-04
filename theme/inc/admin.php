<?php
/**
 * Hide admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Auto create home page
 */
add_action('after_switch_theme', 's_create_home_page');
function s_create_home_page()
{
    if (!get_option('page_on_front')) {
        $qr_slug = get_posts(['post_type' => 'page', 'name' => 'home', 'post_status' => 'all']);
        if (!$qr_slug) {
            $qr_title = get_posts(['post_type' => 'page', 'title' => 'Home', 'post_status' => 'all']);
            if (!$qr_title) {
                $content = '<!-- wp:group {"className":"text-center","layout":{"type":"constrained"}} --><div class="wp-block-group text-center"><!-- wp:paragraph --><p></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Welcome to</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">SEED3 THEME</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"_member"} --><p class="_member">Please click on the "EDIT" button<br>at the bottom left corner of the page.</p><!-- /wp:paragraph --></div><!-- /wp:group -->';
                $homepage = array(
                    'post_title'   => 'Home',
                    'post_content' => $content,
                    'post_status'  => 'publish',
                    'post_author'  => 1,
                    'post_type'    => 'page',
                );
                $homepage_id = wp_insert_post($homepage);
                update_option('show_on_front', 'page');
                update_option('page_on_front', $homepage_id);
            }
        }
    }
}

/*
* Admin CSS
*/
add_action('admin_head', 's_admin_head');

function s_admin_head()
{
    echo '<style>
    #wp-admin-bar-wp-logo,
    #footer-left {
        display: none;
    } 
  </style>';
}
