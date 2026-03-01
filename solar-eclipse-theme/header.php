<?php
/**
 * The header for our theme
 *
 * @package SolarEclipse
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site overflow-x-hidden pt-20">
	<a class="skip-link screen-reader-text sr-only focus:not-sr-only focus:absolute focus:p-4 focus:bg-solar-yellow focus:text-solar-black focus:z-50 focus:rounded" href="#primary">
		<?php esc_html_e('Skip to content', 'solar-eclipse'); ?>
	</a>

	<header id="site-header" class="site-header fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-4">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between items-center glass-panel px-6 py-3">
				
				<!-- Logo -->
				<div class="site-branding flex-shrink-0 flex items-center">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 group" rel="home">
						<div class="w-10 h-10 rounded-full bg-gradient-to-tr from-solar-yellow to-solar-cyan flex items-center justify-center group-hover:animate-glow">
							<svg class="w-6 h-6 text-solar-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
						</div>
						<span class="font-heading font-bold text-xl tracking-wide text-white group-hover:text-solar-yellow transition-colors duration-300">SOLAR ECLIPSE</span>
					</a>
				</div>

				<!-- Desktop Navigation -->
				<nav id="site-navigation" class="hidden md:flex items-center gap-8">
					<?php
wp_nav_menu(
    array(
    'theme_location' => 'primary',
    'menu_id' => 'primary-menu',
    'container' => false,
    'menu_class' => 'flex items-center gap-6 font-medium text-sm text-solar-light',
    'fallback_cb' => function () {
        echo '<ul class="flex items-center gap-6 font-medium text-sm text-solar-light">';
        echo '<li><a href="#solutions" class="hover:text-solar-yellow transition-colors">Solutions</a></li>';
        echo '<li><a href="#process" class="hover:text-solar-yellow transition-colors">Process</a></li>';
        echo '<li><a href="#projects" class="hover:text-solar-yellow transition-colors">Projects</a></li>';
        echo '<li><a href="#about" class="hover:text-solar-yellow transition-colors">About</a></li>';
        echo '</ul>';
    }
)
);
?>
				</nav>

				<!-- CTA & Mobile Toggle -->
				<div class="flex items-center gap-4">
					<a href="#quote" class="hidden md:flex btn-primary !py-2 !px-5 !text-sm whitespace-nowrap">
						Get a Free Quote
					</a>
					<button id="mobile-menu-btn" class="md:hidden text-white hover:text-solar-yellow focus:outline-none p-2" aria-label="Toggle menu">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
					</button>
				</div>
			</div>
		</div>

		<!-- Mobile Navigation -->
		<div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 max-w-7xl mx-auto px-4 mt-2">
			<div class="glass-panel p-6 flex flex-col gap-4">
				<?php
wp_nav_menu(
    array(
    'theme_location' => 'primary',
    'menu_id' => 'primary-menu-mobile',
    'container' => false,
    'menu_class' => 'flex flex-col gap-4 font-medium text-base text-white',
    'fallback_cb' => function () {
        echo '<ul class="flex flex-col gap-4 font-medium text-base text-white">';
        echo '<li><a href="#solutions" class="hover:text-solar-yellow transition-colors block">Solutions</a></li>';
        echo '<li><a href="#process" class="hover:text-solar-yellow transition-colors block">Process</a></li>';
        echo '<li><a href="#projects" class="hover:text-solar-yellow transition-colors block">Projects</a></li>';
        echo '<li><a href="#about" class="hover:text-solar-yellow transition-colors block">About</a></li>';
        echo '</ul>';
    }
)
);
?>
				<a href="#quote" class="btn-primary w-full mt-4 justify-center">Get a Free Quote</a>
			</div>
		</div>
	</header><!-- #site-header -->
