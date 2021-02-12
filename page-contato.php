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
			<a href="https://www.google.com.br/maps" target="_blank"><img src="img/rest-mapa.jpg" alt="Fachada do Rest"></a>
		</div>

		<div class="grid-1-3 contato-item">
			<h2>Dados</h2>
			<p>21 2422-9999</p>
			<p>contato@rest.com</p>
			<p>facebook.com/rest/</p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2>Horários</h2>
			<p>Segunda à Sexta: 10 às 23</p>
			<p>Sábado: 14 às 23</p>
			<p>Domingo: 14 às 22</p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2>Endereço</h2>
			<p>Rua Marechal, 29</p>
			<p>Copacabana - Rio de Janeiro</p>
			<p>Brasil - Terra - Via Láctea</p>
		</div>
	</section>

<?php endwhile; else: endif; ?>
	
<?php get_footer(); ?>