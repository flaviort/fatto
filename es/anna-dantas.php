<!DOCTYPE html>
<html lang="es">

	<?php
		$page_title = 'Equipo | Anna Dantas';
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
									<img src="../assets/img/team/anna.jpg" alt="Anna Dantas">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Anna Dantas <br />
										Consultora Asociada
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('../assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Consultora de Derecho Administrativo
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Abogada
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Posgrado en Gestión Pública – UDF
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Coordinadora de Compliance – MPGE
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
									Sobre Anna D.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Abogada de Derecho Administrativo Sancionador. Posgrado en Gestión Pública por el Centro Universitário UDF (2018). Coordinadora de Compliance MPGE. Oficial de Compliance de la Rede Governança Brasil. Vicepresidente de la Asociación de Defensa contra la Corrupción. Fue Directora de la Comisión de Legislación Anticorrupción y Compliance de la OAB-DF. Fue asesora del Fiscal General del Departamiento Nacional de Infraestructura de Transportes – DNIT, y del Consejo de Administración de Companhia Docas de Rio de Janeiro. Es consultora de Derecho Administrativo y del Sistema U (TCU, CGU y AGU).
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Seguir Anna Dantas
									</p>

									<a href="#" target="_blank" class="hover">
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