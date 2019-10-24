<?php 
	
	$acao = 'recuperaPerguntas';
	require 'controller.php';

	/*echo '<pre>';
		//print_r($questoes);
	echo '</pre>';

	foreach ($questoes as $key => $value) {
		echo $value->pergunta;
	}*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sis Especialista</title>

	<style>
	</style>

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
							<label>Nova resposta</label>
							<input type="text" name="nova_resposta" class="form-control" id="nova_resposta" placeholder="" required>
						</div>
						<div class="form-group">
							<label>Value da nova resposta</label>
							<input type="text" name="valor_resposta" class="form-control" id="valor_resposta" placeholder="" required>
							<small>Letras minúsculas e nenhum acento!</small>
						</div>
						<button type="submit" class="btn btn-info" id="enviarResposta">Enviar</button>
					</form>

					<div>
						<hr>
						<h3 class="text-danger">NÃO UTILIZE ACENTOS!</h3>
					</div>
				</div>
		</div>
	</div>

</body>

<script>
	
	$(document).ready(() => {

		$('#selectPerguntas').change( () => {
	    	$('#mostraId').val($('#selectPerguntas').val());
    	});

	})

</script>

</html>