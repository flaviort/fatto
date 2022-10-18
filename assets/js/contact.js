// rellax
if ($(window).width() > 767) {
	var rellax = new Rellax('.rellax');
}

// contact form
if($('html').attr('lang')=="pt-BR"){

	$(document).ready(function() {
		if (window.location.href.indexOf("sucesso") > -1) {
			$.fancybox.open($("#contact-success"));
		};
	});

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

	$(document).ready(function() {
		if (window.location.href.indexOf("success") > -1) {
			$.fancybox.open($("#contact-success"));
		};
	});
	
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

	$(document).ready(function() {
		if (window.location.href.indexOf("exito") > -1) {
			$.fancybox.open($("#contact-success"));
		};
	});
	
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