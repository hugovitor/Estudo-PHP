<?php 
include ("conexao.php");
$consulta = "SELECT * FROM membros";
$cons = $con->query($consulta) or die ($con->error);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADVIPI - Listar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>
</head>
<body>
	<div class="container-fluid">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form role="form">
					<h2>ADVIPI <small>Lista de Membros</small></h2>
					<hr class="colorgraph">

					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">NOME</th>
								<th scope="col">TIPO</th>
								<th scope="col">IDADE</th>
								<th scope="col">SEXO</th>
								<th scope="col">IGREJA</th>
								<th scope="col">CARGO</th>
								<th scope="col">ENDEREÇO</th>
								<th scope="col">SITUAÇÃO</th>
							</tr>
						</thead>
						<tbody>
						<?php while ($dado = $cons->fetch_array()) { ?>
							<tr>
								<th><?php echo $dado["id"]; ?></th>
								<th><?php echo $dado["nome"]; ?></th>
								<th><?php echo $dado["tipo"]; ?></th>
								<th><?php echo $dado["idade"]; ?></th>
								<th><?php echo $dado["sexo"]; ?></th>
								<th><?php echo $dado["igreja"]; ?></th>
								<th><?php echo $dado["cargo"]; ?></th>
								<th><?php echo $dado["endereco"]; ?></th>
								<th><?php echo $dado["situacao"]; ?></th>
							</tr>
							<?php } ?>
						</tbody>
					</table>

					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg">Inicio</a></div>
					</div>
				</form>
			</div>
		</div>

	</div>
</body>
</html>