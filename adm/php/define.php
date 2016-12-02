<?php

session_start();

switch ($_POST["filtro"])
{
	case 'IDPesquisa':
		$_SESSION["varID"] = $_POST["varID"];
		break;
	case 'Login':
		$_SESSION["varIDMunicipio"] = $_POST["varIDMunicipio"];
		$_SESSION["varNome"] = $_POST["varNome"];
		break;
	case 'DestroiSessao':
		unset($_SESSION["varIDMunicipio"]);
		unset($_SESSION["varNome"]);
		break;
	case 'DefineEleitor':
		$_SESSION["eleitor"] = $_POST["eleitor"];
	    break;
	case 'PesqSetor':
		echo $_SESSION["varIDSetor"];
	    break;
	case 'PesqData':
		echo (date('d-m-Y'));
	    break;
	default:
		break;


}

?>