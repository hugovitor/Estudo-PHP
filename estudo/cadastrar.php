<?php 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADVIPI - Cadastro de Membros</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form role="form" method="POST" action="processa-cadastro.php">
					<h2>Página <small>Cadastro de Membros</small></h2>
					<hr class="colorgraph">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control input-lg"  tabindex="1">
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<label>Tipo</label>
								<input type="text" name="tipo" class="form-control input-lg" placeholder="Ex.: Membro | Congregado" tabindex="2">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<label>Idade</label>
								<input type="text" name="Idade" class="form-control input-lg" placeholder="22" tabindex="2">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<label>Sexo</label>
								<input type="text" name="sexo" class="form-control input-lg" placeholder="Ex.: Masculino" tabindex="2">
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8">
							<div class="form-group">
								<label>Igreja</label>
								<input type="text" name="igreja" class="form-control input-lg"  tabindex="2">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<label>Cargo</label>
								<input type="text" name="cargo" class="form-control input-lg" placeholder="Ex.: Pastor" tabindex="2">
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8">
							<div class="form-group">
								<label>Endereço</label>
								<input type="text" name="endereco" class="form-control input-lg"  tabindex="2">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Situação</label>
						<input type="text" name="situacao" class="form-control input-lg" placeholder="Ex.: Participante"  tabindex="1">
					</div>

					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6"><input type="submit" value="Cadastrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						<div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg">Inicio</a></div>
					</div>
				</form>
			</div>
		</div>

	</div>

</body>
</html>