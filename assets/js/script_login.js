$(document).ready(function(){
	$('#myForm').on('submit', function(event) {
		event.preventDefault();
		$.post('/rent_a_car/login', 
		$('#myForm').serialize(), 
		function(result) {
			console.log(result);
			if (result.failed) {
				$('#error').append('<div class="alert alert-danger">' +result.message+ '<div>');
				$('#myForm')[0].reset();
			} else if (result.success) {
				$('#error').append('<div class="alert alert-success">' +result.message+ '<div>');
				$('#myForm')[0].reset();
			};
		}, 
		'json');
	});
});