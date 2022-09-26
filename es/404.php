<!DOCTYPE html>
<html lang="es">

	<?php
		$page_title = 'Error 404';
		include('includes/head.php');
	?>

	<body class="error">
		<div class="body-overflow">

			<?php include('includes/fs-menu.php'); ?>
			<?php include('includes/top-menu.php'); ?>

			<main id="main-content">

				<!-- banner -->
				<section id="banner">

					<div class="wow fadeIn" data-wow-duration="5s">
						<div class="bg rellax" data-rellax-speed="-4"></div>
					</div>

					<div class="container container-big">
						<div class="row">
							<div class="col-12">

								<h2 class="text-bigger title wow fadeInUp">
									<span>404.</span> Página no <br />
									encontrada
								</h2>

							</div>
						</div>
					</div>
				</section>

				<!-- middle -->
				<section id="middle">
					<div class="container container-big">
						<div class="row">
							
							<div class="col-md-5 left">

								<div class="letter wow fadeInUp">
									<?php include('../assets/svg/letter-f.php') ?>
								</div>

							</div>

							<div class="col-md-7 right text-medium">

								<p class="wow fadeIn">
									Lamentablemente, la página a la que intentó acceder no existe. Si necesita cualquier información, póngase en contacto con nosotros a través de nuestra <a href="contato" class="hover-multiple-lines">página de contacto</a>.<br /><br />

									O volver a la <a href="./" class="hover-multiple-lines">página de inicio</a>.
								</p>

							</div>

						</div>
					</div>
				</section>
				
			</main>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>

			<footer>
				<script src="../assets/js/framework.js"></script>
			</footer>

		</div>
	</body>
</html>