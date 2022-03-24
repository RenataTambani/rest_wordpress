<?php
//Template name: Menu da semana
	?>

<?php get_header(); ?> 
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
	 <section class="container"> 
			<h2 class="subtitulo">Menu da Semana</h2>

			<div class="menu-item grid-8">
			<h2><?php the_field('item01') ?></h2>
				
				<ul>
					<li>
						<span><sup>R$</sup><?php the_field('item01_prato01_preco') ?></span>
						<div>
							<h3><?php the_field('item01_prato01_titulo') ?></h3>
							<p><?php the_field('item01_prato01_texto') ?></p>
						</div>
					</li>

					<li>
						<span><sup>R$</sup><?php the_field('item01_prato02_preco') ?></span>
						<div>
							<h3><?php the_field('item01_prato02_titulo') ?></h3>
							<p><?php the_field('item01_prato02_texto') ?></p>
						</div>
					</li>

					<li>
						<span><sup>R$</sup><?php the_field('item01_prato03_preco') ?></span>
						<div>
							<h3><?php the_field('item01_prato03_titulo') ?></h3>
							<p><?php the_field('item01_prato03_texto') ?></p>
						</div>
					</li>

				</ul>
			</div>


			<div class="menu-item grid-8">
			<h2><?php the_field('item02') ?></h2>
				
				<ul>
					<li>
						<span><sup>R$</sup><?php the_field('item02_prato01_preco') ?></span>
						<div>
							<h3><?php the_field('item02_prato01_titulo') ?></h3>
							<p><?php the_field('item02_prato01_texto') ?></p>
						</div>
					</li>

					<li>
						<span><sup>R$</sup><?php the_field('item02_prato02_preco') ?></span>
						<div>
							<h3><?php the_field('item02_prato02_titulo') ?></h3>
							<p><?php the_field('item02_prato02_texto') ?></p>
						</div>
					</li>

					<li>
						<span><sup>R$</sup><?php the_field('item02_prato03_preco') ?></span>
						<div>
							<h3><?php the_field('item02_prato03_titulo') ?></h3>
							<p><?php the_field('item02_prato03_texto') ?></p>
						</div>
					</li>

				</ul>
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
