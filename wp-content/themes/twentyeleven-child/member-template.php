<?php
/**
 * Template Name:会員専用
 *
 */
if(!is_user_logged_in()) {
    // ログインしてなかったら、ログイン画面へ
    auth_redirect();
}
get_header('member'); ?>
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>