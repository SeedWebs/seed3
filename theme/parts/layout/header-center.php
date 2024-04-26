<header id="masthead" class="py-3 md:py-5 transition-all">
	<div class="container relative">
		<div class="flex items-center justify-between">
			<div class="dark-btn cursor-pointer lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-4">
				<span class="dark:hidden"><?= s_icon('sun', 24); ?></span>
				<span class="hidden dark:block"><?= s_icon('moon', 24); ?></span>
			</div>
			<a href="<?= esc_url(home_url('/')); ?>" rel="home" class="flex gap-2 items-center text-primary font-bold text-xl lg:text-2xl lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-1/2 lg:-translate-y-1/2">
				S E<?= s_icon('logo', 30) ?>E D
			</a>
			<button class="nav-btn border-2 border-current rounded px-2 py-1 lg:hidden text-current" title="Menu">
				<em></em>
			</button>
		</div>
		<nav id="nav" class="opacity-0 h-0 overflow-hidden [&_a]:block [&_a]:py-1  lg:opacity-100 lg:h-auto lg:flex lg:items-center lg:justify-center lg:px-10">
			<div class="lg:flex lg:gap-5 lg:justify-end lg:w-1/3">
				<a href="/products">Products</a>
				<a href="/solutions">Solutions</a>
			</div>
			<div class="w-[200px]"></div>
			<div class="lg:flex lg:gap-5 lg:w-1/3">
				<a href="/about">About</a>
				<a href="/my-account">Member</a>
			</div>
			<a href="/my-account" arial-label="My Account" class="hidden lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:right-4">
				<?= s_icon('user', 24) ?>
			</a>
		</nav>
	</div>
</header>