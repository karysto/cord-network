<?php
/**
 * Infinity Theme: 404 template
 *
 * @author Bowe Frankema <bowe@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Bowe Frankema
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @subpackage templates
 * @since 1.0
 */

	infinity_get_header();
?>
	<div id="content" role="main" class="<?php do_action( 'content_class' ); ?>">
		<?php
			do_action( 'open_404' );
		?>
		<article id="post-0" class="post error404 not-found">
			<header>
			<h1 class="entry-title">
				<?php _e( 'Page not found', infinity_text_domain ); ?>
			</h1>
			</header>
			<div class="entry-content">
				<p>
						<?php
							_e( 'Sorry, but the content you requested could not be found.', infinity_text_domain );
						?>
					</p>
					<?php
						infinity_get_search_form();
					?>
			</div>

		</article>
		<?php
			do_action( 'close_404' );
		?>
	</div>
	<?php
		infinity_get_sidebar();
	?>
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
<?php
	infinity_get_footer();
?>
