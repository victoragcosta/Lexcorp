//TODO: funcao de start

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

//TODO: funcao de login
//TODO: funcao de logout

//TODO: ready do start
$(document).ready(acesso_secreto);
//TODO: ready de login
//TODO: ready de logout