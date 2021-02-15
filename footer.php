		<footer>
			<nav class="nav-footer">
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<p>Rest © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
			<p>Desenvolvido por Leonardo Pilatti.</p>
		</footer>

		<!-- Footer Wordpress -->
		<?php wp_footer(); ?>
		<!-- Fecha Footer Wordpress -->
	</body>
</html>