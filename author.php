<?php
/**
 * The template for displaying author archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<style>
#primary {
	width: 100%
}
.ast-author-bio {
	white-space: pre-line;
	text-align: center;
}

.ast-author-avatar{
	background-color: white;
	text-align: center;
	padding-top: 20px;

}
.post-thumb {
	text-align:center;
}
section.ast-author-box.ast-archive-description {
	padding-top: 0px;
}
.ast-author-avatar img{
	border-radius: 50%;

}

</style>
	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

<?php

				$author_name      = get_the_author() ? get_the_author() : '';
				?>
					<div class="ast-author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'email' ), 120 ); ?>
					</div>

				<section class="ast-author-box ast-archive-description">
					<div class="ast-author-bio">
						<?php do_action( 'astra_before_archive_title' ); ?>
						<h1 class='page-title ast-archive-title'><?php echo esc_html( apply_filters( 'astra_author_page_title', $author_name ) ); ?></h1>
						<?php do_action( 'astra_after_archive_title' ); ?>
						<p><?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?></p>
						<?php do_action( 'astra_after_archive_description' ); ?>
					</div>
				</section>

		<?php astra_content_loop(); ?>

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->


<?php get_footer(); ?>
