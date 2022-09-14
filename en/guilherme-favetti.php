<!DOCTYPE html>
<html lang="en-US">

	<?php
		$page_title = 'Team | Guilherme Favetti';
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
										Partner
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('../assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Attorney
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Master's Degree in Contemporary Law – UPPR
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Master in Constitutional Law – IDP
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
									About Guilherme F.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Attorney. Master in Constitutional Law from IDP (2020). Postgraduate in Contemporary Law with emphasis in Public Law from Universidade Positivo – PR (2012). Advisor at the Public Ministry of Paraná with expertise in Criminal Courts and Courts of Criminal Executions (2012-2015). He is a consultant in the Judiciary area, focusing on Criminal Law and its consequences for the institutional scenario.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Follow Guilherme Favetti
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