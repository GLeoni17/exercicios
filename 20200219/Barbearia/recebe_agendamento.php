

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<?php
	if(!file_exists("agendamentos.xml")){
	$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
	$xml .= '<agendamentos>';

		$xml .= '<agendamento>';
		$xml .= '<nome>' . $_POST["nome"] . '</nome>';
		$xml .= '<data>' . $_POST["data"] . '</data>';
		$xml .= '<hora>' . $_POST["hora"] . '</hora>';
		$xml .= '</agendamento>';

	$xml .= '</agendamentos>';
	$fp = fopen('agendamentos.xml', 'w+');
	fwrite($fp, $xml);
	fclose($fp);
	}
	else{
		$xml = simplexml_load_file('agendamentos.xml');
	}
	?>
	<h4>Agendamento realizado com sucesso!</h4>
	<a href="form_agendamento.php"> Novo agendamento </a>
	<br>
	<a href="lista_agendamento.php"> Listar agendamentos </a>
	</body>

</html>







<!--<?php

$count = sizeof($_POST["servico"]);

echo $count;
die();

foreach($_POST["servico"] as $s){
	echo $s. " | ";
}


die();

?>-->