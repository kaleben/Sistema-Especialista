<?php 

$acao = 'recuperaPerguntas';
require 'controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sis Especialista</title>

	<style>
		.row {
			height: 100%
		}
	</style>

	<!-- estilos -->

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8be91c1c19.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="js/scriptInsert.js"></script>

</head>

<body style="margin-top: -24px">

	<div class="container-fluid">
		<div class="row min-vh-100">
			<aside class="col-12 col-md-2 p-0 bg-dark" > <!--style="margin-bottom: -7.3%"-->
				<nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
					<div class="collapse navbar-collapse">
						<ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
							<li class="nav-item">
								<a class="nav-link pl-0 text-nowrap sisesp" href="index.php"><span class="badge badge-warning">v1</span> <span class="font-weight-bold">Sis Especialista </span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link pl-0" href="inserir.php"><i class="fas fa-arrow-circle-up"></i> <span class="d-none d-md-inline">Cadastro</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link pl-0" href="perguntas.php"><i class="fas fa-book"></i> <span class="d-none d-md-inline">Perguntas</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</aside>
			<main class="col bg-faded py-3">
				<div class="container mt-3" id="pagina">
					<div id="alert"></div>
					<div class="row">
						<div class="col">
							<h1 class="display-4 mb-3">Cadastrar Pergunta</h1>
							<form class="mb-3" id="formPergunta" method="post">
								<div class="form-group">
									<label >Nova pergunta</label>
									<input type="text" name="pergunta" class="form-control" id="pergunta" placeholder="" required>
								</div>
								<div class="form-group">
									<label>Resposta de chamada</label>
									<input type="text" name="resposta_chamada" class="form-control" id="resposta_chamada" placeholder="" required>
								</div>
								<button type="submit" class="btn btn-info" id="enviarPergunta">Enviar</button>
							</form>
							<hr>
							<h1 class="display-4 mb-3">Cadastrar Resposta</h1>
							<form id="formResposta" method="post">
								<div class="form-group">
									<label>Nova resposta</label>
									<input type="text" name="nova_resposta" class="form-control" id="nova_resposta" placeholder="" required>
								</div>
								<div class="mb-3">
									<label>Selecionar pergunta</label>
									<select class="custom-select" name="id_pergunta" id="selectPerguntas">
										<option selected>Selecionar..</option>
										<? foreach ($questoes as $key => $value) { ?>
											<option value="<?= $value->id_pergunta ?>"><?= $value->pergunta ?></option>
										<? } ?>
									</select>
									<div class="col-2 form-group p-0 mt-1">   
										<input type="text" class="form-control" id="mostraId" value="" disabled="" placeholder="Id Selecionado">
									</div>
								</div>

								<div class="form-group">
									<label>Value da nova resposta</label>
									<input type="text" name="valor_resposta" class="form-control" id="valor_resposta" placeholder="" required>
									<small>Letras minúsculas e nenhum acento!</small>
								</div>
								<button type="submit" class="btn btn-info" id="enviarResposta">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

</body>

<script>

	$(document).ready(() => {

		$('#selectPerguntas').change( () => {
			$('#mostraId').val($('#selectPerguntas').val());
			$('#valor_resposta').val($('#nova_resposta').val().toLowerCase()+'id'+$('#selectPerguntas').val());
		});

		$('.sisesp').on('click', function(e) {
    		event.preventDefault();
    		window.open($(this).attr("href")); 
		});

	})

</script>

</html>