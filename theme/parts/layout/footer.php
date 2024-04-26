<?php
$socials = [
    'instagram' => 'https://www.instagram.com/',
    'facebook' => 'https://www.facebook.com/',
    'x' => 'https://www.twitter.com/',
    'line' => 'https://line.me/',
    'instagram' => 'https://www.instagram.com/',
    'tiktok' => 'https://www.tiktok.com/',
    'youtube' => 'https://www.youtube.com/',
];
?>
<footer id="colophon" class="text-sm mt-auto text-center bg-gray-200 p-4 dark:bg-gray-800">
	<div class="container grid gap-2 md:flex md:justify-between">
		<div class="mt-2 order-1 md:order-1 md:mt-0 text-gray-500 dark:text-gray-300">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
		</div>
		<div class="flex gap-4 justify-center md:order-2 md:justify-end">
			<?php foreach ($socials as $key => $value) : ?>
			<a href="<?= $value ?>" target="_blank" class="text-gray-500 dark:text-gray-300">
				<?= s_icon($key, 16) ?>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</footer>