<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Equipe | Anna Dantas';
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
									<img src="assets/img/team/anna.jpg" alt="Anna Dantas">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Anna Dantas <br />
										Consultora Associada
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Consultora em Direito Administrativo
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Advogada
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Pós em Gestão Pública – UDF
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Coordenadora de Compliance – MPGE
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

								<?php include('assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Advogada com atuação em Direito Administrativo Sancionador. Pós-Graduada em Gestão Pública pela UDF (2018). Coordenadora de Compliance do MPGE. Compliance Officer da Rede Governança Brasil. Vice-Presidente da Associação da Advocacia Contra a Corrupção. Foi Diretora da Comissão de Legislação Anticorrupção e Compliance da OAB-DF. Foi Assessora do Procurador-Geral do DNIT e do Conselho de Administração Companhia Docas do Rio de Janeiro. É consultora na área de Direito Administrativo e Sistema U (TCU, CGU e AGU).
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Siga Anna Dantas
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