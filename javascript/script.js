/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
document.addEventListener(
	'click',
	function (e) {
		if (e.target.closest('.nav-btn')) {
			document.body.classList.toggle('nav-open');
		}
		if (e.target.closest('.dark-btn')) {
			const isDark = document.documentElement.classList.contains('dark');
			localStorage.setItem('theme', isDark ? 'light' : 'dark');
			document.documentElement.classList.toggle('dark');
		}
	},
	false
);
