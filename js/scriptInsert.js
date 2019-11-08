$(document).ready(() => {

	$('#enviarPergunta').on('click', () => {

		let dados = $('#formPergunta').serialize();

		if ($('#pergunta').val() == '' || $('#resposta_chamada').val() == ''){

			$('#alert').append('<div class="alert alert-danger" role="alert" id="sucesso">Preencha todos os campos!</div>').fadeIn()
					setTimeout( () => {
						$('#sucesso').fadeOut('fast');
						$('#sucesso').remove();
					}, 3000);

		} else {

			$.ajax({
				type: 'post',
				url: 'controller.php?acao=inserirPergunta',
				data: dados,
				success: dados => {

					$('#alert').append('<div class="alert alert-success" role="alert" id="sucesso">Pergunta inserida com sucesso!</div>').fadeIn()
					setTimeout( () => {
						$('#sucesso').fadeOut('fast');
						$('#sucesso').remove();
					}, 3000);

				},
				error: erro => {
					console.log('Erro: '+erro);
				}
			})

		} //fecha else

	})

	$('#enviarResposta').on('click', () => {

		let dados = $('#formResposta').serialize();

		if ($('#nova_resposta').val() == '' || $('#valor_resposta').val() == ''){

			$('#alert').append('<div class="alert alert-danger" role="alert" id="sucesso">Preencha todos os campos!</div>').fadeIn()
					setTimeout( () => {
						$('#sucesso').fadeOut('fast');
						$('#sucesso').remove();
					}, 3000);

		} else {

			$.ajax({
				type: 'post',
				url: 'controller.php?acao=inserirResposta',
				data: dados,
				success: dados => {

					$('#alert').append('<div class="alert alert-success" role="alert" id="sucesso">Resposta inserida com sucesso!</div>').fadeIn()
					setTimeout( () => {
						$('#sucesso').fadeOut('fast');
						$('#sucesso').remove();
					}, 3000);

				},
				error: erro => {
					console.log('Erro: '+erro)
				}
			})

		}

	})

})


