<?php 

$acao = 'recuperaAll';
require 'controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sis Especialista</title>

	<!-- estilos -->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="js/scriptInsert.js"></script>

</head>

<body>
	
		<div class="nav-side-menu">
			<div class="brand">SIS ESPECIALISTA</div>
			<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

			<div class="menu-list">

				<ul id="menu-content" class="menu-content collapse out">
					<li>
						<a href="inserir.php"><i class="fa fa-check-circle sidebar-icon" id="cadastro"></i>Cadastro</a>
					</li>

					<li>
						<a href="perguntas.php"><i class="fa fa-question-circle sidebar-icon" id="perguntas"></i>Perguntas</a>
					</li>

					<li>
		            	<a href="index.php"><i class="fa fa-robot sidebar-icon" id="perguntas"></i>  Infinity</a>
		            </li>

				</ul>
			</div>
		</div>

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

</body>

</html>