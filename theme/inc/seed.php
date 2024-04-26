<?php

function s_avatar()
{
    $u = wp_get_current_user();
    echo get_avatar($u->ID, 80);
}

function s_profile()
{
    if (!is_user_logged_in()) {
        return;
    }
    $u = wp_get_current_user();
    $u_meta = get_user_meta($u->ID);
    $name = $u_meta['first_name'][0] . ' ' . $u_meta['last_name'][0];
    if(!trim($name)) {
        $name = $u_meta['nickname'][0];
    }
    $html  = '<div class="flex justify-center my-4 *:rounded-full">';
    $html .= get_avatar($u->ID, 80);
    $html .= '</div>';
    $html .= '<h2 class="text-center text-lg font-bold mb-2 uppercase">' . $name . '</h2>';
    $html .= '<p class="flex justify-center text-sm text-gray-500">';
    $html .= '<a class="flex gap-1" href="' . wp_logout_url(home_url('/')) . '">' . s_icon('logout', 20) . 'Logout</a>';
    $html .= '</p>';
    return $html;
}
