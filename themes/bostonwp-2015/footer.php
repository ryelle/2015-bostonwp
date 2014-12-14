<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bostonwp
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php if ( is_active_sidebar( 'site-footer' ) ) : ?>
            <div id="home-footer" class="content-area" role="complementary">
                    <?php dynamic_sidebar( 'site-footer' ); ?>
            </div><!-- #site-footer -->
            <?php endif; ?>
            
            <div class="site-info content-area">
                &copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name'); ?> 
            </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
