$(document).ready(function(){
	$('#myForm').on('submit', function(event) {
		event.preventDefault();
		$.ajax({
			url: '/rent_a_car/login',
			type: 'POST',
			dataType: 'json',
			data: $('#myForm').serialize(),
			error: function() {
				$('#error').append('<div class="alert alert-danger">Something wrong<div>');
				$('#myForm')[0].reset();
			},
			success: function(response) {
				window.location.href('/rent_a_car/home');
			}
		})
	});
});