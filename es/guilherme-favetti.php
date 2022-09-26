<!DOCTYPE html>
<html lang="es">

	<?php
		$page_title = 'Equipo | Guilherme Favetti';
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
									<img src="../assets/img/team/guilherme.jpg" alt="Guilherme Favetti">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Guilherme Favetti <br />
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
											Consultor de Derecho Penal
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Abogado
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Posgrado en Derecho Contemporáneo – UPPR
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Máster en Derecho Constitucional – IDP
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
									Sobre Guilherme F.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Abogado. Máster en Derecho Constitucional por el Instituto de Derecho Público – IDP (2020). Posgrado en Derecho Contemporáneo con énfasis en Derecho Público de la Universidade Positivo – PR (2012). Asesor del Ministerio Público de Paraná con experiencia en Juzgados Penales y Juzgados de Ejecución Penal (2012-2015). Es consultor en el Poder Judicial, con foco en Derecho Penal y sus consecuencias para el escenario institucional.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Seguir Guilherme Favetti
									</p>

									<a href="https://www.linkedin.com/in/guilherme-favetti-1a8a90104/" target="_blank" class="hover">
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