<?php

function verifica_arquivo_existente($arquivo){
	if(!file_exists($arquivo)){
		$arquivo = fopen($arquivo,"w+");
		$xml = "<?xml version='1.0'?>";
		$xml .= "<agendamentos>";
		$xml .= "</agendamentos>";
		fwrite($arquivo,$xml);
		fclose($arquivo);
	}
}

function adicionar_agendamento($valores, $arquivo){
	$xml = simplexml_load_file($arquivo);
	$filho = $xml->addChild('agendamento','');
	$filho->addChild('nome',$valores["nome"]);
	$filho->addChild('email',$valores["email"]);
	$filho->addChild('telefone',$valores["telefone"]);
	$filho->addChild('data',$valores["data"]);
	$filho->addChild('hora',$valores["hora"]);	
	file_put_contents ($arquivo, $xml->asXML());
}

function exibe_tabela_xml($arquivo){

	if(file_exists($arquivo)){
		$xml = simplexml_load_file($arquivo);
		echo "<tr>";
			echo "<th>Nome</th><th>Email</th><th>Telefone</th><th>Data</th><th>Horário</th>";
		echo "</tr>";
		foreach($xml->agendamento as $a){
			echo "<tr>";
				echo "<td>".$a->nome."</td>";
				echo "<td>".$a->email."</td>";
				echo "<td>".$a->telefone."</td>";
				echo "<td>".$a->data."</td>";
				echo "<td>".$a->hora.":".$a->minuto."</td>";
			echo "</tr>";
		}
	}
	else{
		echo "Ainda não há nenhum agendamento.";
	}
}

?>