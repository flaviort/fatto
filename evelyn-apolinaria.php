<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Evelyn Apolinária';
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
									<img src="assets/img/team/evelyn.jpg" alt="Evelyn Apolinária">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Evelyn Apolinária <br />
										Analista Política
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Graduada em Ciência Política pela Universidade de Brasília (UnB)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Mestranda em Ciência Política pela Universidade de Brasília (UnB)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Atuou por quase 4 anos no Grupo Energisa
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
									Sobre Evelyn A.
								</p>

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Graduada e mestranda em Ciência Política pela Universidade de Brasília (UnB). Atuou por quase 4 anos no Grupo Energisa, o maior grupo com capital nacional do setor elétrico brasileiro, na área de relações institucionais. Sua trajetória profissional também inclui a M&G Consultoria Política, onde pôde atuar com public affairs e advocacy nos poderes Executivo e Legislativo. Integra a equipe da Fatto, para atuar com análise política e relações governamentais.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Evelyn Apolinária
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
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>