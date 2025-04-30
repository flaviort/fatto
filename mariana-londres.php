<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Mariana Londres';
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
									<img src="assets/img/team/mariana.jpg" alt="Mariana Londres">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Mariana Londres <br />
										Analista Política Sênior
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Jornalista (política e economia) - ISE/IESE Business School 
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Historiadora (UFPR)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											MBA pela FGV
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

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Analista política, jornalista com master pelo ISE/IESE Business School, historiadora pela UFPR, MBA em gestão estratégica pela FGV. Especialista em traçar cenários e no monitoramento de projetos econômicos do Executivo e no Congresso Nacional. Trabalhou em redações por duas décadas (Band, Gazeta do Povo, BNAmericas, Estadão e R7). Atuou em Curitiba, sua cidade natal, e São Paulo, inicialmente como repórter de Economia. Chegou a Brasília em 2010, para cobrir as eleições presidenciais. É colunista do UOL desde 2022.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Mariana Londres
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
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>