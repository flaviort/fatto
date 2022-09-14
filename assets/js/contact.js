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
		},
		submitHandler: function(form) {
			
			var form = $('#contact-form');
			
			$('.green-button').addClass('sending');
			
			$.ajax({
				type: 'POST',
				url: 'php/sendmail.php',
				data: form.serialize(),
				success: function (result) {
					if (result == 'true') {
						$.fancybox.close();
						$.fancybox.open($("#contact-success"));
						$('.green-button').removeClass('sending');
						$('#contact-form').trigger("reset");
					} else {
						$.fancybox.close();
						$.fancybox.open($("#contact-error"));
						$('.green-button').removeClass('sending');
					}
				},
				error: function (errorThrown) {
					$.fancybox.close();
					$.fancybox.open($("#contact-error"));
					$('.green-button').removeClass('sending');
					console.log(errorThrown);
				}
			});
			return false;
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
		},
		submitHandler: function(form) {
			
			var form = $('#contact-form');
			
			$('.green-button').addClass('sending');
			
			$.ajax({
				type: 'POST',
				url: '../php/sendmail.php',
				data: form.serialize(),
				success: function (result) {
					if (result == 'true') {
						$.fancybox.close();
						$.fancybox.open($("#contact-success"));
						$('.green-button').removeClass('sending');
						$('#contact-form').trigger("reset");
					} else {
						$.fancybox.close();
						$.fancybox.open($("#contact-error"));
						$('.green-button').removeClass('sending');
					}
				},
				error: function (errorThrown) {
					$.fancybox.close();
					$.fancybox.open($("#contact-error"));
					$('.green-button').removeClass('sending');
					console.log(errorThrown);
				}
			});
			return false;
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
		},
		submitHandler: function(form) {
			
			var form = $('#contact-form');
			
			$('.green-button').addClass('sending');
			
			$.ajax({
				type: 'POST',
				url: '../php/sendmail.php',
				data: form.serialize(),
				success: function (result) {
					if (result == 'true') {
						$.fancybox.close();
						$.fancybox.open($("#contact-success"));
						$('.green-button').removeClass('sending');
						$('#contact-form').trigger("reset");
					} else {
						$.fancybox.close();
						$.fancybox.open($("#contact-error"));
						$('.green-button').removeClass('sending');
					}
				},
				error: function (errorThrown) {
					$.fancybox.close();
					$.fancybox.open($("#contact-error"));
					$('.green-button').removeClass('sending');
					console.log(errorThrown);
				}
			});
			return false;
		}
	});
}