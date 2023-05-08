<!DOCTYPE html>
<html lang="en-US">

	<?php
		$page_title = 'Team | Evelyn Apolinária';
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
									<img src="../assets/img/team/evelyn.jpg" alt="Evelyn Apolinária">
								</div>

							</div>

							<div class="col-md-6 right">

								<div class="top">

									<h1 class="text-bigger wow fadeInUp sub">
										Evelyn Apolinária <br />
										Political Analyst
									</h1>

									<div class="letter wow fadeInUp">
										<?php include('../assets/svg/letter-f.php') ?>
									</div>

								</div>

								<div class="details text-big">

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Graduated in Political Science at the University of Brasília (UnB)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
											Currently pursuing a master's degree in Political Science at the University of Brasília (UnB)
										</p>

									</div>

									<div class="line wow fadeInUp">

										<?php include('../assets/svg/diagonal-arrow-down.php') ?>

										<p>
										Worked for nearly 4 years at Grupo Energisa
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
									About Evelyn A.
								</p>

								<?php include('../assets/svg/long-arrow-right.php') ?>

							</div>

							<div class="col-lg-6 right">

								<p class="text-medium desc wow fadeInUp">
									Graduated and currently pursuing a master's degree in Political Science at the University of Brasília (UnB). Worked for nearly 4 years at Grupo Energisa, the largest nationally-owned group in the Brazilian electric sector, in institutional relations and public affairs. Her professional trajectory also includes M&G Consultoria Política, where she was able to work on government relations with the Executive and Legislative branches. She is part of the Fatto Inteligência Política team, where she works on political analysis and government relations.
								</p>

								<div class="follow text-small wow fadeInUp">

									<p>
										Follow Evelyn Apolinária
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
				<script src="../assets/js/framework.js"></script>
				<script src="../assets/js/team-internal.js" defer></script>
			</footer>

		</div>
	</body>
</html>