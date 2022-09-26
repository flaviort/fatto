<!DOCTYPE html>
<html lang="es">

	<?php
		$page_title = 'Equipo | Rafael Favetti';
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
									<img src="../assets/img/team/rafael.jpg" alt="Rafael Favetti">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Rafael Favetti <br />
										Socio
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('../assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Cientista Político
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Profesor
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Máster en Ciencias Políticas – UnB
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Doctor en Derecho – IDP
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
									Sobre Rafael F.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Cientista político, profesor y abogado. Máster en Ciencias Políticas por la Universidad de Brasilia y Doctor en Derecho por el Instituto de Derecho Público – IDP. Fue secretario ejecutivo del Ministerio de la Justicia y asesor legal del Ministerio. También fue asesor y jefe de gabinete de ministro del Supremo Tribunal Federal y se desempeñó como consultor de un partido político en el Senado Federal. Ha sido analista político de asociaciones, empresas y fondos de inversión durante más de 20 años.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Seguir Rafael Favetti
									</p>

									<a href="https://www.linkedin.com/in/rafael-favetti-80762093/" target="_blank" class="hover">
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