<?php 

$acao = 'recuperaAll';
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
			<aside class="col-12 col-md-2 p-0 bg-dark" style="margin-bottom: -5%">
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
				<div class="container mt-3">
			<? foreach ($questoes as $key => $value) { ?>
				<div class="card text-white bg-dark mb-3">
					<div class="card-header">
						Pergunta <?= $value->id_pergunta ?>
					</div>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text"><?= $value->pergunta ?></p>
					</div>
					<div class="card-footer bg-info"><?= $value->resp_return ?></div>
					<div class="card-footer bg-info"><?= $value->valor ?></div>
				</div>
			<? } ?>
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

		
