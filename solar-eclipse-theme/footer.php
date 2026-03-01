<?php
/**
 * The template for displaying the footer
 *
 * @package SolarEclipse
 */
?>

	<footer id="colophon" class="site-footer bg-solar-black border-t border-white/10 pt-20 pb-10">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
				
				<!-- Brand Column -->
				<div class="footer-widget">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 mb-6">
						<div class="w-8 h-8 rounded-full bg-gradient-to-tr from-solar-yellow to-solar-cyan flex items-center justify-center">
							<svg class="w-5 h-5 text-solar-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
						</div>
						<span class="font-heading font-bold text-lg tracking-wide text-white">SOLAR ECLIPSE</span>
					</a>
					<p class="text-solar-gray text-sm leading-relaxed mb-6">
						Premium solar solutions for homes, businesses, and large-scale energy independence. Powering the future with clean, sustainable, and innovative technology.
					</p>
					<div class="flex items-center gap-4">
						<!-- Social Links -->
						<a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-solar-light hover:bg-solar-yellow hover:text-solar-black transition-colors" aria-label="Twitter">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
						</a>
						<a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-solar-light hover:bg-solar-yellow hover:text-solar-black transition-colors" aria-label="LinkedIn">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
						</a>
					</div>
				</div>

				<!-- Navigation Links -->
				<div class="footer-widget">
					<h3 class="font-heading font-semibold text-white mb-6">Explore</h3>
					<?php
wp_nav_menu(
    array(
    'theme_location' => 'footer',
    'container' => false,
    'menu_class' => 'flex flex-col gap-3 text-sm text-solar-gray hover:text-solar-light',
    'fallback_cb' => function () {
        echo '<ul class="flex flex-col gap-3 text-sm text-solar-gray">';
        echo '<li><a href="#solutions" class="hover:text-solar-yellow transition-colors">Residential Solutions</a></li>';
        echo '<li><a href="#solutions" class="hover:text-solar-yellow transition-colors">Commercial Setup</a></li>';
        echo '<li><a href="#process" class="hover:text-solar-yellow transition-colors">Installation Process</a></li>';
        echo '<li><a href="#projects" class="hover:text-solar-yellow transition-colors">Case Studies</a></li>';
        echo '</ul>';
    }
)
);
?>
				</div>

				<!-- Contact Info -->
				<div class="footer-widget">
					<h3 class="font-heading font-semibold text-white mb-6">Contact Us</h3>
					<ul class="flex flex-col gap-4 text-sm text-solar-gray">
						<li class="flex items-start gap-3">
							<svg class="w-5 h-5 text-solar-yellow flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
							<span>123 Solar Way, Innovation Park<br>San Francisco, CA 94105</span>
						</li>
						<li class="flex items-center gap-3">
							<svg class="w-5 h-5 text-solar-cyan flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
							<a href="tel:+18005550199" class="hover:text-solar-yellow transition-colors">+1 (800) 555-0199</a>
						</li>
						<li class="flex items-center gap-3">
							<svg class="w-5 h-5 text-solar-green flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
							<a href="mailto:hello@solareclipse.com" class="hover:text-solar-yellow transition-colors">hello@solareclipse.com</a>
						</li>
					</ul>
				</div>

				<!-- Newsletter Subscribe -->
				<div class="footer-widget">
					<h3 class="font-heading font-semibold text-white mb-6">Stay Updated</h3>
					<p class="text-sm text-solar-gray mb-4">Subscribe to our newsletter for the latest in solar tech and energy savings.</p>
					<form class="flex flex-col gap-3" action="#" method="POST" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
						<input type="email" placeholder="Enter your email" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-solar-cyan focus:ring-1 focus:ring-solar-cyan transition-colors" required>
						<button type="submit" class="w-full btn-secondary py-3 text-sm hover:border-solar-yellow hover:text-solar-yellow">Subscribe</button>
					</form>
				</div>
			</div>

			<div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
				<div class="text-sm text-solar-gray">
					&copy; <?php echo date_i18n('Y'); ?> Solar Eclipse. All rights reserved.
				</div>
				<div class="text-sm text-solar-gray/50 text-center md:text-right">
					Images via Unsplash Source / Pexels.<br>
					<div class="flex items-center justify-center md:justify-end gap-4 mt-2">
						<a href="#" class="hover:text-solar-light transition-colors">Privacy Policy</a>
						<a href="#" class="hover:text-solar-light transition-colors">Terms of Service</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Floating Mobile CTA (visible only on very small screens if needed) -->
		<div class="md:hidden fixed bottom-6 right-6 z-50">
			<a href="#quote" class="w-14 h-14 bg-solar-yellow text-solar-black rounded-full shadow-[0_0_20px_rgba(251,191,36,0.5)] flex items-center justify-center hover:scale-105 transition-transform" aria-label="Get Quote">
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path></svg>
			</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
