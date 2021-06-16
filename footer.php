<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klink_festival_dessau
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-organizer">
			<p>veranstaltet durch</p>
			<a href="http://dessau-vorort.de" class="site-organizer-logo" style="mask-image: url('<?php echo get_theme_file_uri('assets/images/vorort_logo.svg'); ?>'); -webkit-mask-image: url('<?php echo get_theme_file_uri('assets/images/vorort_logo.svg'); ?>');"></a>
		</div>
		<div class="site-info">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		</div>
		<div class="site-social">
			<ul>
				<li>
					<a href="https://instagram.com/klink_festival_dessau" title="Instagram" style="mask-image: url('<?php echo get_theme_file_uri('assets/images/instagram.png'); ?>'); -webkit-mask-image: url('<?php echo get_theme_file_uri('assets/images/instagram.png'); ?>');"></a>
				</li>
				<li>
					<a href="#" title="Facebook" style="mask-image: url('<?php echo get_theme_file_uri('assets/images/facebook.png'); ?>'); -webkit-mask-image: url('<?php echo get_theme_file_uri('assets/images/facebook.png'); ?>');"></a>
				</li>
				<li>
					<a href="#" title="E-Mail" style="mask-image: url('<?php echo get_theme_file_uri('assets/images/mail.png'); ?>'); -webkit-mask-image: url('<?php echo get_theme_file_uri('assets/images/mail.png'); ?>');"></a>
				</li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>
