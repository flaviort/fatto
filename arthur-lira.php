<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Arthur Lira';
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
									<img src="assets/img/team/arthur.jpg" alt="Arthur Lira">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Arthur Lira <br />
										Analista Político
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Graduado em Ciência Política – UFPE
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
									Sobre Arthur L.
								</p>

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Graduado em Ciência Política pela Universidade Federal de Pernambuco – UFPE e especialista em Engenharia e Análise de Dados pela CESAR School (PE). Foi Diretor Administrativo da Virtù Consultoria Política e estagiou na Assembleia Legislativa do Estado de Pernambuco. É responsável pelo núcleo de dados e análises qualitativas e quantitativas da Fatto.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Arthur Lira
									</p>

									<a href="https://www.linkedin.com/in/arthur-santos-lira-084292145/" target="_blank" class="hover">
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