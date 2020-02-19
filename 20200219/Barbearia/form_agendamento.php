<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<style>
	form {
		border-style: 1px solid black;
	}
	</style>
	<link href="cover.css" rel="stylesheet">
</head>
<body>

	<div class="container-fluid">
		<header>
		
	</header>
		<div class="row">
		<span class="col-md-4"> </span>
		<div class="col-md-4">
			<h1>Barbearia </h1>
			<form action="recebe_agendamento.php" class="form-login" method="POST">
				<input type="text" class="form-control" name="nome" placeholder="Nome...">
				<br>
				<br>
				<input type="email" class="form-control" name="email" placeholder="Email...">
				<br>
				<br>
				<input type="tel" class="form-control" name="telefone" placeholder="Telefone">
				<br>
				<br>
				<input type="date" class="form-control" name="data">
				<br>
				<br>
				<input type="time" class="form-control" name="hora" step="00:45" min="07:00" max="17:45" placeholder="Hora">
				<br>
				<br>
				<input type="submit" class="btn btn-lg btn-primary btn-block" value="Agendar">
			</form>
			<footer>
		<br><br>
				<p>Telefone para contato: (16) 91234-5678</p>
		</footer>
		<a href="lista_agendamento.php">Listar agendamentos</a>
		</div>
		<span class="col-md-4"> </span>
		</div>
		
	</div>

</body>
</html>

<!--
	Serviço: 
		<input type="checkbox" name="servico[]" value="cabelo" />Cabelo 
		<input type="checkbox" name="servico[]" value="barba" />Barba 
		<input type="checkbox" name="servico[]" value="bigode" />Bigode 
		<br>
		<br>

		Rerefencia: https://image.freepik.com/fotos-gratis/cara-na-barbearia_1157-7711.jpg
-->