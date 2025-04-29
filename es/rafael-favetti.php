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
									Politólogo, profesor y abogado. Máster en Ciencia Política por la UnB y Doctor en Derecho por el IDP. Posee un MBA en Economía y Derecho Minero. Fue secretario ejecutivo del Ministerio de Justicia y consultor jurídico del departamento. También fue asesor y jefe de gabinete de un ministro del STF y trabajó como consultor del partido en el Senado Federal. Miembro de la comisión de juristas para el anteproyecto de código de derecho internacional privado. Vicepresidente de ABRIG. Es analista político de asociaciones, empresas y fondos de inversión desde hace más de 20 años.
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