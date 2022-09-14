function isMobile() { return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent); }
if (isMobile()) {
	$('body').addClass('mobile');
}

// change wow order
$(document).ready(function() {
	if ($(window).width() < 993) {
		$("#grid div[data-wow-delay='.3s']").attr("data-wow-delay", ".1s");
		$("#grid div[data-wow-delay='.4s']").attr("data-wow-delay", ".2s");
	}
});

