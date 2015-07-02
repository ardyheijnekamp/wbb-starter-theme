
<?php if ( ! defined ( 'WPINC' ) )
{
	header ( 'HTTP/1.0 404 Not Found' , TRUE , 404 );
	die( "404 Not Found" );
}
?>
<?php if ( ! have_posts () ) : ?>

	<div class="alert alert-warning">

		<?php _e ( 'Sorry, no results were found.' , WBB_THEME_SLUG ); ?>

	</div>

	<?php get_search_form (); ?>

<?php endif; ?>

<?php while ( have_posts () ) : the_post (); ?>

	<?php get_template_part ( 'templates/content' , get_post_type () != 'post' ? get_post_type () : get_post_format () ); ?>

<?php endwhile; ?>

<?php the_posts_navigation (); ?>