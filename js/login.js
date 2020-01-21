$(document).ready(function(){

	$('.login_btn').on('click',  function(event) {
		event.preventDefault();

		if($('#formLogin').valid())
		{
			
			$.ajax({
				url: 'rpc/login.php',
				type: 'post',
				data: {
					username: $('form#formLogin #username').val(),
					password: $('form#formLogin #password').val()
				},
			})
			.done(function(msg) {
				console.log(msg);
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		}
	});






















})


