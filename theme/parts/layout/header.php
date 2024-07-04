<header id="masthead" class="bg-white/90 backdrop-blur-sm drop-shadow sticky top-0 z-50 py-3 md:py-4 transition-all dark:bg-black/80">
	<div class="container relative lg:flex lg:items-center lg:gap-5">
		<div class="flex items-center justify-between">
			<a href="<?= esc_url(home_url('/')); ?>" rel="home" class="flex gap-2 items-center text-primary">
				<?= s_icon('logo', 24) ?>
				<p class="text-lg font-medium"><?php bloginfo('name'); ?></p>
			</a>
			<button class="nav-btn border-[1.5px] border-current rounded px-2 py-1 lg:hidden text-current" title="Menu">
				<em></em>
			</button>
		</div>
		<nav id="nav" class="opacity-0 h-0 overflow-hidden [&_a]:block [&_a]:py-1 lg:[&_ul]:flex lg:[&_ul]:gap-5 lg:opacity-100 lg:h-auto lg:flex lg:ml-auto">
			<?php wp_nav_menu(['theme_location' => 'menu-1']);?>
		</nav>
		<div class="dark-btn cursor-pointer absolute flex items-center top-1 right-16 lg:relative lg:right-0 lg:top-0">
			<span class="dark:hidden"><?= s_icon('sun', 20); ?></span>
			<span class="hidden dark:block"><?= s_icon('moon', 20); ?></span>
		</div>
	</div>
</header>