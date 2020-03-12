function effect_msg_form() {
	$('.form-msg').slideDown(1000),
		setTimeout(function () {
			$('.form-msg').slideUp(1000);
		}, 3000)
}

function effect_msg() {
	$('.msg').show(1000),
		setTimeout(function () {
			$('.msg').fadeOut(1000);
		}, 3000)
}
