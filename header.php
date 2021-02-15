<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- Header Wordpress -->
		<?php wp_head(); ?>
		<!-- Fecha Header Wordpress -->
	</head>

	<body>
		
		<header>
			<nav>
				<ul>
					<li class="current_page_item"><a href="http://testewp.test/">Menu</a></li>
					<li><a href="/testewp.test/sobre/">Sobre</a></li>
					<li><a href="/testewp.test/contato/">Contato</a></li>
				</ul>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>
			<?php $contato = get_page_by_title('Contato')->ID; ?>
			<p><?php the_field('rua', $contato); ?> – <?php the_field('cidade', $contato); ?></p>
			<p class="telefone"><?php the_field('telefone', $contato); ?> </p>
		</header>