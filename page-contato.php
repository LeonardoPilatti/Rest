<?php
	// Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- criar um loop com esse php if, é uma boa prática de php -->

	<section class="container contato">
		<h2 class="subtitulo"><?php the_title(); ?></h2>  <!-- esse the_title é para modificar o titulo da pagina em 
																páginas -> em cima de link permanente -->
		<div class="grid-16">
			<a href="https://www.google.com.br/maps" target="_blank"><img src="<?php the_field('localizacao_rest'); ?>" alt="<?php the_field('textoAlt'); ?>"></a>
		</div>

		<div class="grid-1-3 contato-item">
			<h2><?php the_field('primeiroItemContato'); ?></h2>
			<p><?php the_field('telefone'); ?></p>
			<p><?php the_field('email'); ?></p>
			<p><?php the_field('facebook'); ?></p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2><?php the_field('primeiroItemHorario'); ?></h2>
			<p><?php the_field('funcionamento'); ?></p>
			<p><?php the_field('sabado'); ?></p>
			<p><?php the_field('domingo'); ?></p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2><?php the_field('primeiroItemEndereco'); ?></h2>
			<p><?php the_field('rua'); ?></p>
			<p><?php the_field('cidade'); ?></p>
			<p><?php the_field('pais'); ?></p>
		</div>
	</section>

<?php endwhile; else: endif; ?>
	
<?php get_footer(); ?>