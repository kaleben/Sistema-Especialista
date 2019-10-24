<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sis Especialista</title>

	<style>
	</style>

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</head>

<body class="dark">
	<div class="container pt-3">
		<div class="row justify-content-center">
			<div class="col-9">
				<div id="frases" class="col mt-3 text-center text-white"></div>
				<div id="ultimo" class="col mt-3 text-center text-white"></div>

				<div class="col-8 ml-auto mr-auto ">
					<img src="img/ia.gif">
				</div>

				
					<div class="form-group">
					    <select class="form-control" id="resposta">
					      <option value="">Selecionar</option>					      
					    </select>
  					</div>
					<button id="enviar" class="btn btn-primary btn-block btn-outline-info">Responder</button>
					<div id="help" class="text-white"></div>

			</div>
		</div>
	</div>

</body>

</html>