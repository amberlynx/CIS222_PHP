$(function() {
	$('.errorMessage').hide();
	$('#login').submit(function() {
		var email, password;
		
		if($('#email').val().length >=6)
		{
			email = $('#email').val();
			$('#emailP').removeClass('error');
			$('#emailError').hide();
		}
		else
		{
			$('#email').addClass('error');
			$('#emailError').show();
		}
		
		if($('#password').val().length >=0)
		{
			password = $('#password').val();
			$('#passwordP').removeClass('error');
			$('#passwordError').hide();
		}
		else
		{
			$('#password').addClass('error');
			$('#passwordError').show();
		}
		
		if(email && password)
		{
			var data = new Object();
			
			options.data = data;
			options.dataType = 'text';
			options.type = 'get';
			options.success = function(response)
			{
				if(response == 'CORRECT')
				{
					$('#login').hide();
					$('#results').removeClass('error');
					$('#results').text('You are now logged in!');
				}
				else if(response == 'INCORRECT')
				{
					$('#results').text('The submitted credentials do not match those on file!');
					$('#results').addClass('error');
				}
				else if(response == 'INCOMPLETE')
				{
					$('#results').text('Please provide an email address and a password!');
					$('#results').addClass('error');
				}
				else if(response == 'INVALID_EMAIL')
				{
					$('#results').text('Please provide your email address!');
					$('#results').addClass('error');
				}
			};
			options.url = 'login_ajax.php';
			$.ajax(options);
		}
		return false; // Prevent submission
	});
});