<!DOCTYPE html>
<html lang="pt-BR">

	<?php
		$page_title = 'Contato | Carreira';
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
									<span>05.</span> Contato <br />
									Carreira
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

								<div class="form">
									<form action="" id="contact-form" method="POST">
										<div class="row">

											<div class="col-md-6">

												<div class="form-line wow fadeInUp">

													<label for="nome" class="label text-medium">
														Nome completo
													</label>

													<input type="text" name="Nome" id="nome" class="input text-medium" placeholder="Digite aqui" required />
													
												</div>

												<div class="form-line wow fadeInUp">

													<label for="email" class="label text-medium">
														E-mail
													</label>

													<input type="email" name="Email" id="email" class="input text-medium" placeholder="Digite aqui" required />
													
												</div>

												<div class="form-line wow fadeInUp">

													<label for="telefone" class="label text-medium">
														Telefone
													</label>

													<input type="text" name="Telefone" id="telefone" class="input text-medium" placeholder="Digite aqui" />
													
												</div>

												<div class="form-line wow fadeInUp">

													<label for="horario" class="label text-medium">
														Melhor horário para conversarmos
													</label>

													<input type="text" name="Horario" id="horario" class="input text-medium" placeholder="Digite aqui" />
													
												</div>

											</div>

											<div class="col-md-6 right">

												<div class="form-line wow fadeInUp">

													<label for="mensagem" class="label text-medium">
														Deixe sua mensagem
													</label>

													<textarea name="Mensagem" id="mensagem" class="input textarea text-medium" placeholder="Digite aqui" required></textarea>

												</div>

											</div>

											<div class="col-12">
												
												<button type="submit" class="text-small green-button wow fadeInUp">
													<span class="loading"><?php include('assets/svg/spinner.php') ?></span>
													Enviar
												</button>

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