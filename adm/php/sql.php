<?php
session_start();

require_once("cmd_sql.php");
switch ($_POST["filtro"]) {

	case 'VagasDelegadoSC':
		VagasDelegadoSC();
		break;
	default:
		break;
}


function VagasDelegadoSC() {
	$sql = new cmd_SQL();
	$bd[sql]="SELECT * FROM vagasdepto vd where vd.idmunicipio = " . $_SESSION["varIDMunicipio"];
	$bd[ret]="xml";
	$sql->pesquisar($bd);
}

function exibe_xml($xml) {
	$xml = "<?xml version='1.0' encoding='utf-8' ?><raiz> $xml </raiz> ";
	header("Content-type: application/xml");
	echo $xml;
}


?>