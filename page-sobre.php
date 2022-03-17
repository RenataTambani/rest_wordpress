<?php
//Template name: Sobre
 ?>

<?php get_header(); ?> 
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<section class="container sobre">
			<h2 class="subtitulo">Sobre</h2>

			<div class="grid-8">
				<img src="<?php the_field('foto_rest_fachada'); ?>" alt="<?php the_field('foto_rest_descricao'); ?>" >
			</div>

			<div class="grid-8">
				<h2><?php the_field('titulo_historia') ?></h2>
				<?php the_field('texto_da_historia') ?>
		
				<h2><?php the_field('titulo_visao') ?></h2>
				<?php the_field('texto_da_visao') ?>
				
				<h2><?php the_field('titulo_valores') ?></h2>
				<?php the_field('texto_dos_valores') ?>
				
			</div>
		</section>
		<?php endwhile; else: ?>
	<section class="container sobre">
		<div class="grid-8">
			<p><?php _e("Essa página não existe."); ?></p>
		</div>
	<section>
<?php endif; ?>
		<?php get_footer(); ?>