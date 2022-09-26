<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Rafael Favetti';
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
									<img src="assets/img/team/rafael.jpg" alt="Rafael Favetti">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Rafael Favetti <br />
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
											Cientista político
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Professor
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Mestre em Ciência Política – UnB
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Doutor em Direito – IDP
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

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Cientista político, professor e advogado. Mestre em Ciência Política pela UnB e doutor em Direito pelo IDP. Foi secretário executivo do Ministério da Justiça e consultor jurídico da pasta. Também foi assessor e chefe de gabinete de ministro do STF e atuou como consultor de partido no Senado Federal. É analista político de associações, empresas e fundos de investimento há mais de 20 anos.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Rafael Favetti
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
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>