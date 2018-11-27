$(document).ready(function(){
	$('#myForm').on('submit', function(event) {
		event.preventDefault();
		$.post('/rent_a_car/login', 
			$('#myForm').serialize(), 
			function(result) {
				console.log(result);
				if (result.failed) {
					$('#error').empty();
					$('#error').append('<div class="alert alert-danger">' +result.message+ '<div>');
					$('#myForm')[0].reset();
				} else if (result.success) {
					var url = '/rent_a_car/home';
					$('#myForm')[0].reset();
					$(location).attr('href', url);
					$('#error').append('<div class="alert alert-success">' +result.message+ '<div>');
					
					
				};
			}, 
			'json');
	});
});