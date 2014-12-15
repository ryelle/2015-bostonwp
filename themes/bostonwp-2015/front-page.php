<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bostonwp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                <?php if ( is_active_sidebar( 'home-top' ) ) : ?>
                <div id="home-top" class="content-area" role="complementary">
                        <?php dynamic_sidebar( 'home-top' ); ?>
                </div><!-- #home-top -->
                <?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
        
        <div class="home-videos content-area">
            <h2>Recent Videos</h2>
        </div>

        <div class="home-resources content-area">
            <h2>Recent Resources</h2>
        </div>
        
        <?php if ( is_active_sidebar( 'home-footer' ) ) : ?>
        <div id="home-footer" class="content-area" role="complementary">
                <?php dynamic_sidebar( 'home-footer' ); ?>
        </div><!-- #home-top -->
        <?php endif; ?>

<?php get_footer(); ?>
