<?php
    $arquivo_xml = simplexml_load_file('agendamentos.xml');
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/font/css/open-iconic-bootstrap.min.css">
			<style>
			table {
				text-align: center;
				border: 1px solid black;
				
			}
			th {
			border: 1px solid black;
			}
			td {
				border: 1px solid black;
				text-align: center;
			}
			</style>
		</head>
	<body>
		<table style="width:50%" class="table table-striped">
		<tr>
			<th>Nome </th>
			<th>Data </th>
			<th>Hora </th>
		</tr>
		<?php
		// para cada elemento do vetor $arquivo_xml->agendamento sendo este elemento a variavel $a
		foreach($arquivo_xml->agendamento as $a){
			echo "<tr>
					<td>".$a->nome."</td>
					<td>".$a->data."</td>
					<td>".$a->hora."</td>
				</tr>";
		}
		?>
		</table>
		<a href="index.php"> Novo agendamento </a>
	</body>
</html>
