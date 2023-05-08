<!DOCTYPE html>
<html lang="es">

	<?php
		$page_title = 'Equipo | Evelyn Apolinária';
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
									<img src="../assets/img/team/evelyn.jpg" alt="Evelyn Apolinária">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Evelyn Apolinária <br />
										Analista Política
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('../assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Graduada en Ciencia Política por la Universidad de Brasilia (UnB)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Maestranda en Ciencia Política por la Universidad de Brasilia (UnB)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Trabajó durante casi 4 años en el Grupo Energisa
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
									Sobre Evelyn M.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Graduada y maestranda en Ciencia Política por la Universidad de Brasilia (UnB). Trabajó durante casi 4 años en el Grupo Energisa, el mayor grupo con capital nacional del sector eléctrico brasileño, en el área de relaciones institucionales. Su trayectoria profesional también incluye M&G Consultoria Política, donde pudo trabajar en relaciones gubernamentales junto a los poderes Ejecutivo y Legislativo. Es parte del equipo de Fatto Inteligência Política, trabajando en análisis político y relaciones gubernamentales.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Seguir Evelyn Apolinária
									</p>

									<a href="https://www.linkedin.com/in/evelyn-apolin%C3%A1ria-a01a2b173/" target="_blank" class="hover">
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