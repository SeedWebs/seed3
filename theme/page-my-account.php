<?php
$action = '';
if (isset($_GET['action'])) {
    $action = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['action']);
}
$template = 'login';
if (is_user_logged_in()) {
    $template = 'account';
} elseif ($action === 'loginwithemail') {
    $template = 'login-form';
}
get_header();?>
<section id="primary">
    <main id="main" class="container">
        <?php while (have_posts()) : the_post();?>
        <?php edit_post_link();?>
        <?php get_template_part('parts/my/'. $template);?>
        <?php endwhile; ?>
    </main>
</section>
<?php
get_footer();
?>