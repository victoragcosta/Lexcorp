var start = function(){
	$.ajax({
		type: "POST",
		url: 'controller/LoginController.php',
		data: {func:'start'},
		success: function(data){
			$('#spa-content').html(data);
		}
	});
}

var acesso_secreto = function(){
	$(document).on("click","#Bilionario", function(){
		$(document).on("click","#Playboy", function(){
			$(document).on("click", "#Genio", function(){
				$(document).on("click", "#Filantropo", function(){
					$("#lex").hide();
					$("#login").show();
				})
			})
		})
	})
}

var login = function(){
	$(document).on('click','#submit',function(){

		var user = $('#username').val();
		var pass = $('#password').val();

		$.ajax({
			type: "POST",
			url: 'controller/LoginController.php',
			data: {func:'login',user:user,pass:pass},
			success: function(data){
				if(data != 'nope'){
					$('#spa-content').html(data);
				}
			}
		});
	});
}

//TODO: funcao de logout

$(document).ready(start);
$(document).ready(acesso_secreto);
$(document).ready(login);
//TODO: ready de logout