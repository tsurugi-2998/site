<?php
/**
 * Template Name:山行記録
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header('log'); 

?>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'log' ); ?>

				<?php endwhile; // end of the loop. ?>

<?php get_footer('log'); ?>
