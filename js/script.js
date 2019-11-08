$(document).ready(() => {

// LOGICA FALAS DA INFINITY // 

	$('body').on('mouseenter', () => {

	
		$('#frases').animate({'margin': '0px'}, {

			start: () => {

				//textos a serem exibidos
				var textos = ["Olá!", "Tudo bem?", "Meu nome é Infinity", "Eu vou te auxiliar com seu problema", "Então vamos lá...",
				 "Primeiro, você pode usar a caixa de opções para me responder!", "Então.. selecione a opção 'Entendi!' para continuarmos", ];

				var i = 0;

				//define intervalo de troca
				var intervalo = setInterval(function() {

		        	//efeito de desaparecer
		        	$('#frases').fadeOut(function() {

		            	//função "callback" que mostra o próximo texto
		            	if (i < textos.length) {
		            		$('#frases').text(textos[i++]).fadeIn();
		            	}

		        	}); //fecha fadeOut

		    	}, 1000); //fecha setInterval

				clearInterval()

		    	//Faz a ultima fala da infinity ficar fixa na tela
		    	var t = setTimeout(function(){
		    		var ultimo = textos[textos.length - 1];

		    		$('#frases').remove();
		    		$('#ultimo').html(ultimo);

		    		//Correção erro input duplicado
		    		if ($('#ultimo').html() == ultimo) { 
		    			// $('#resposta').remove();
		    		}

		    		$('#resposta').append('<option value="entendi">Entendi!</option>');


		    	} 
		    	,1000 * (textos.length +1)); //fecha setTimesout

			}, //fecha start

		}) //fecha animate
	}) //fecha onClick


/////////// REQUISIÇÕES //////////////


	// $('#enviar').on('click', function() {

	// 	var val = $('#resposta').val();

	// 	$.ajax({
	// 		type: 'POST',
	// 		url: 'controller.php?acao=recuperaFalaInfinity',
	// 		data: `resposta=${val}`,
	// 		dataType: 'json',
	// 		success: dados => {

	// 			console.log(dados);

	// 			$('#ultimo').html(dados[0].pergunta);
	// 			$('option').remove();
	// 			$('#resposta').append('<option value="">Selecionar</option>');
	// 			for(var i = 0; i < dados.length; i++)
	// 			if (typeof(dados[i].resp_return) != 'undefined') {
	// 				$('#resposta').append(`<option value="${dados[i].valor}">${dados[i].resp_return}</option>`);
	// 			}

	// 		},
	// 		error: erro => {
	// 			console.log('Erro: '+erro)
	// 		}

	// 	})


	// })


////////////////////////////////////////

})//fecha ready



