<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Guilherme Favetti';
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
									<img src="assets/img/team/guilherme.jpg" alt="Guilherme Favetti">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Guilherme Favetti <br />
										Sócio
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Advogado
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Pós em Direito Contemporâneo – UPPR
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Mestre em Direito Constitucional – IDP
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

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Advogado. Mestre em Direito Constitucional pelo IDP (2020). Pós-graduado em Direito Contemporâneo com ênfase em Direito Público pela Universidade Positivo – PR (2012). Assessor no Ministério Público do Paraná com atuação em Varas Criminais e Varas de Execuções Penais (2012-2015). É consultor na área de Judiciário, com foco em Direito Penal e suas consequências para o cenário institucional.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Guilherme Favetti
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
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>