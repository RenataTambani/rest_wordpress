
<?php get_header(); ?> 
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?>	</h1>
		<?php the_content(); ?>

<?php endwhile; else: ?>
	<section class="container sobre">
		<div class="grid-8">
			<p><?php _e("Essa página não existe."); ?></p>
		</div>
	<section>
<?php endif; ?>

<?php get_footer(); ?>
