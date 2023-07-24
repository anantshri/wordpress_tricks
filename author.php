<?php
/**
 * The template for displaying authors archive page.
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

.page-title {
	margin-bottom : unset;
}

.author_info {
	background-color: white;
	margin-bottom: 2em;
	border-bottom: 1px solid var(--ast-border-color);
/*
 	background: linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0.5) 100%), url('https://social.anantshri.info/fileserver/01MQAAN7KGRBFCKM6KAZVN463G/attachment/original/01V454YPVT11429Q953J5GJW0W.png') no-repeat center center;
    	background-size: cover;
*/
}

.ast-author-avatar{
	text-align: center;
	padding-top: 20px;

}
.post-content {
	text-align:center;
}
.ast-float {
	float: unset;
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
		<div class="author_info">
					<div class="ast-author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'email' ), 120 ); ?>
					</div>

					<div class="ast-author-bio">
						<?php do_action( 'astra_before_archive_title' ); ?>
						<h1 class='page-title ast-archive-title'><?php echo ucwords(esc_html( apply_filters( 'astra_author_page_title', $author_name ) )); ?></h1>
						<?php do_action( 'astra_after_archive_title' ); ?>
						<p><?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?></p>
						<?php do_action( 'astra_after_archive_description' ); ?>
					</div>
		</div>
		<?php astra_content_loop(); ?>

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->


<?php get_footer(); ?>
