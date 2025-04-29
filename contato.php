<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Contato';
		include('includes/head.php');
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: PUT, GET, POST");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	?>

	<body class="contact">
		<div class="body-overflow">

			<?php include('includes/fs-menu.php'); ?>
			<?php include('includes/top-menu.php'); ?>

			<main id="main-content">

				<!-- banner -->
				<section id="banner">

					<div class="wow fadeIn" data-wow-duration="5s">
						<div class="bg rellax" data-rellax-speed="-4"></div>
					</div>

					<div class="container container-big">
						<div class="row">
							<div class="col-12">

								<h2 class="text-bigger title wow fadeInUp">
									Contato
								</h2>

							</div>
						</div>
					</div>
				</section>

				<!-- middle -->
				<section id="middle">
					<div class="container container-big">
						<div class="row">
							<div class="col-12">

								<div class="top">
									<div class="row">

										<div class="col-md-6 wow fadeInUp">

											<p class="text-medium">
												Entre em contato com a Fatto.
											</p>

										</div>

										<div class="col-md-6 wow fadeInUp">

											<?php include('assets/svg/logo-with-slogan.php') ?>

										</div>

									</div>
								</div>

								<div class="address text-medium">
									<div class="row">

										<div class="col-md-6">
											<div class="image wow fadeIn">
												<img src="assets/img/qr-code.jpg" alt="QR Code">
											</div>
										</div>

										<div class="col-md-6">

											<p class="wow fadeInUp">
												WhatsApp: <a href='https://wa.me/5511972089616' class='hover-multiple-lines'>+55 11 97208-9616</a>
											</p>

											<p class="wow fadeInUp">
												SHIS, QI 3, Conjunto 11, Cs. 9 – Lago Sul, Brasília / DF
											</p>

											<p class="wow fadeInUp">
												CEP: 71605-310
											</p>

										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				
			</main>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>
			<?php include('includes/popups.php'); ?>

			<footer>
				<script src="assets/js/framework.js"></script>
				<script src="assets/js/contact.js" defer></script>
			</footer>

		</div>
	</body>
</html>