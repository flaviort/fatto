<!DOCTYPE html>
<html lang="es">

	<?php
		$page_title = 'Equipo | Mariana Londres';
		include('includes/head.php');
	?>

	<body class="team-internal">
		<div class="body-overflow">

			<?php include('includes/fs-menu.php'); ?>
			<?php include('includes/top-menu.php'); ?>

			<main id="main-content">

				<!-- banner -->
				<section id="banner">
					<div class="container container-big">
						<div class="row">

							<div class="col-md-6 left">

								<div class="image wow fadeIn">
									<img src="../assets/img/team/mariana.jpg" alt="Mariana Londres">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Mariana Londres <br />
										Analista político senior
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('../assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Periodista (política y economía) - ISE/IESE Business School 
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Historiador (UFPR)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											MBA de la FGV
										</p>

									</div>

								</div>

							</div>

						</div>
					</div>
				</section>

				<!-- details -->
				<section id="details">
					<div class="container container-big">
						<div class="row">

							<div class="col-lg-6 left wow fadeInUp">

								<p class="text-bigger">
									Sobre Mariana L.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Analista político, periodista con maestría por ISE/IESE Business School, historiador por la UFPR, MBA en gestión estratégica por la FGV. Especialista en la formulación de escenarios y seguimiento de proyectos económicos en el Ejecutivo y el Congreso Nacional. Es columnista de UOL. Trabajó en redacciones durante dos décadas (Band, Gazeta do Povo, BNAmericas, Estadão y R7). Trabajó en Curitiba, su ciudad natal, y en São Paulo, inicialmente como periodista económico. Llegó a Brasilia en 2010 para cubrir las elecciones presidenciales. También es columnista de UOL.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Seguir Mariana Londres
									</p>

									<a href="https://br.linkedin.com/in/mariana-londres-7489228" target="_blank" class="hover">
										Linkedin
									</a>

								</div>

							</div>

						</div>
					</div>
				</section>

				<!-- related -->
				<?php include('includes/related.php') ?>
				
			</main>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>

			<footer>
				<script src="../assets/js/framework.js"></script>
				<script src="../assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>