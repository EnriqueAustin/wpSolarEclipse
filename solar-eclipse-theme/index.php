<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package SolarEclipse
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen pt-24 pb-12">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<?php
if (have_posts()):

    while (have_posts()):
        the_post();
?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
					<header class="entry-header mb-8">
						<?php
        if (is_singular()):
            the_title('<h1 class="entry-title text-4xl md:text-5xl font-bold mb-4">', '</h1>');
        else:
            the_title('<h2 class="entry-title text-3xl md:text-4xl font-bold mb-4"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="hover:text-solar-yellow transition-colors">', '</a></h2>');
        endif;

        if ('post' === get_post_type()):
?>
							<div class="entry-meta text-solar-gray text-sm">
								<?php
            echo 'Posted on ' . get_the_date() . ' by ' . get_the_author();
?>
							</div><!-- .entry-meta -->
						<?php
        endif; ?>
					</header><!-- .entry-header -->

					<?php if (has_post_thumbnail()): ?>
						<div class="post-thumbnail mb-8 rounded-2xl overflow-hidden shadow-lg">
							<?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover')); ?>
						</div>
					<?php
        endif; ?>

					<div class="entry-content prose prose-invert prose-lg max-w-none prose-headings:font-heading prose-a:text-solar-cyan hover:prose-a:text-solar-yellow">
						<?php
        the_content(
            sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'solar-eclipse'),
            array(
            'span' => array(
                'class' => array(),
            ),
        )
        ),
            wp_kses_post(get_the_title())
        )
        );
?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
				<?php
    endwhile;

    the_posts_navigation(
        array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'solar-eclipse') . '</span> <span class="nav-title">%title</span>',
        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'solar-eclipse') . '</span> <span class="nav-title">%title</span>',
        'class' => 'border-t border-white/10 pt-8 mt-12',
    )
    );

else:
?>
			<section class="no-results not-found">
				<header class="page-header mb-8">
					<h1 class="page-title text-4xl font-bold"><?php esc_html_e('Nothing Found', 'solar-eclipse'); ?></h1>
				</header>
				<div class="page-content text-lg text-solar-light">
					<?php
    if (is_search()):
?>
						<p class="mb-6"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'solar-eclipse'); ?></p>
						<?php
        get_search_form();
    else:
?>
						<p class="mb-6"><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'solar-eclipse'); ?></p>
						<?php
        get_search_form();
    endif;
?>
				</div>
			</section>
			<?php
endif;
?>
	</div>
</main><!-- #main -->

<?php
get_footer();
