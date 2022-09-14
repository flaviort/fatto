// rellax
if ($(window).width() > 767) {
	var rellax = new Rellax('.rellax');
}

// contact form
if($('html').attr('lang')=="pt-BR"){ 
	$("#contact-form").validate({
		highlight: function (element){
			$(element).closest(".form-line").addClass("error");
		},
		unhighlight: function (element){
			$(element).closest(".form-line").removeClass("error");
		},
		messages: {
			Nome: "Este campo é obrigatório",
			Email: "Este campo é obrigatório",
			Mensagem: "Este campo é obrigatório",
		}
	});
} else if($('html').attr('lang')=="en-US"){ 
	$("#contact-form").validate({
		highlight: function (element){
			$(element).closest(".form-line").addClass("error");
		},
		unhighlight: function (element){
			$(element).closest(".form-line").removeClass("error");
		},
		messages: {
			Nome: "This field is required",
			Email: "This field is required",
			Mensagem: "This field is required",
		}
	});
} else {
	$("#contact-form").validate({
		highlight: function (element){
			$(element).closest(".form-line").addClass("error");
		},
		unhighlight: function (element){
			$(element).closest(".form-line").removeClass("error");
		},
		messages: {
			Nome: "Este campo es obligatorio",
			Email: "Este campo es obligatorio",
			Mensagem: "Este campo es obligatorio",
		}
	});
}

// submit contact form
$("button[type='submit']").click(function () {
	if ($('#contact-form').length > 0) {

		$("#contact-form").submit(function () {
			var contactForm = $('#contact-form');

			$.ajax({
				type: 'POST',
				url: './php/sendmail.php',
				data: contactForm.serialize(),
				success: function (result) {

					if (result == 'true') {
						$.fancybox.close();
						$.fancybox.open($("#contact-success"));

					} else {
						$.fancybox.close();
						$.fancybox.open($("#contact-error"));
					}

				},
				error: function (xmlHttpRequest, textStatus, errorThrown) {
					$.fancybox.close();
					$.fancybox.open($("#contact-error"));
					console.log(errorThrown);
				}
			});

			return false;

		});
	};
});