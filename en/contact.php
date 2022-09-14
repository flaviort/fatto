<!DOCTYPE html>
<html lang="en-US">

	<?php
		$page_title = 'Contact | Career';
		include('includes/head.php');
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
									<span>05.</span> Contact <br />
									Career
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
												Contact Fatto.
											</p>

										</div>

										<div class="col-md-6 wow fadeInUp">

											<?php include('../assets/svg/logo-with-slogan.php') ?>

										</div>

									</div>
								</div>

								<div class="form">
									<form action="" id="contact-form" method="post">
										<div class="row">

											<div class="col-md-6">

												<div class="form-line wow fadeInUp">

													<label for="nome" class="label text-medium">
														Full Name
													</label>

													<input type="text" name="Nome" id="nome" class="input text-medium" placeholder="Type here" required />
													
												</div>

												<div class="form-line wow fadeInUp">

													<label for="email" class="label text-medium">
														E-mail
													</label>

													<input type="email" name="Email" id="email" class="input text-medium" placeholder="Type here" required />
													
												</div>

												<div class="form-line wow fadeInUp">

													<label for="telefone" class="label text-medium">
														Phone
													</label>

													<input type="text" name="Telefone" id="telefone" class="input text-medium" placeholder="Type here" />
													
												</div>

												<div class="form-line wow fadeInUp">

													<label for="horario" class="label text-medium">
														Best time to talk
													</label>

													<input type="text" name="Horário" id="horario" class="input text-medium" placeholder="Type here" />
													
												</div>

											</div>

											<div class="col-md-6 right">

												<div class="form-line wow fadeInUp">

													<label for="mensagem" class="label text-medium">
														Leave your message
													</label>

													<textarea name="Mensagem" id="mensagem" class="input textarea text-medium" placeholder="Type here" required></textarea>

												</div>

											</div>

											<div class="col-12">
												
												<button type="submit" class="text-small green-button wow fadeInUp">
													Submit
												</button>

												<a href="#contact-success" data-fancybox>
													test
												</a>

												<div class="cf"></div>

											</div>

										</div>
									</form>
								</div>

								<div class="address text-medium">
									<div class="row">
										
										<div class="col-md-6">

											<p class="wow fadeInUp">
												SHIS, QI 3, Conjunto 11, Cs. 9 – Lago Sul, Brasília / DF
											</p>

										</div>

										<div class="col-md-6">

											<p class="wow fadeInUp">
												Zipcode: 71605-310
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
				<script src="../assets/js/framework.js"></script>
				<script src="../assets/js/contact.js" defer></script>
			</footer>

		</div>
	</body>
</html>