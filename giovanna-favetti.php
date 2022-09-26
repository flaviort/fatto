<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Giovanna Favetti';
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
									<img src="assets/img/team/giovanna.jpg" alt="Giovanna Favetti">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Giovanna Favetti <br />
										Consultora associada
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>
	
										<p>
											Consultora em Direito Eleitoral
										</p>
	
									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Advogada
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
									Sobre Giovanna F.
								</p>

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Advogada com atuação em direito administrativo, constitucional e eleitoral. Assessora de juiz titular da classe de jurista do Tribunal Regional Eleitoral do Paraná (2016 e 2018). Durante o ano de 2019, integrou a equipe do Núcleo de Assessoramento Jurídico do Ministério Público do Paraná. É consultora na área de Direito Eleitoral.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Giovanna Favetti
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
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>