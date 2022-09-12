// rellax
if ($(window).width() > 767) {
	var rellax = new Rellax('.rellax');
}

// contact form
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