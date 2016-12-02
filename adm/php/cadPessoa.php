<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Pessoas</title>


<link href="../css/estilo_tela.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<div id="tela">
		
		<form class="form">

<?php

require_once("cmd_sql.php");

if ($_POST["txtID"]<=0) {
	Incluir();
}else{
	Alterar($_POST["txtID"]);
}

function Incluir()
{
	$con = new cmd_SQL();

	setlocale(LC_CTYPE,"pt_BR");

	$db[tab]="pessoa";
	$db[campos]="nome, " .
				"rg, " .
				"cpf, " .
				"data_nascimento, " .
				"estado, " .
				"cidade, " .
				"bairro, " .
				"rua, " .
				"numero, " .
				"complemento, " .
				"macro_regiao, " .
				"cep, " .
				"telefone_residencial, " .
				"telefone_comercial, " .
				"celular, " .
				"idade" ;

	$db[values]= mb_strtoupper (utf8_decode("'" . ($_POST["txtNome"]) . "'," .
				"'" . ($_POST["txtRG"]) . "'," .
				"'" . ($_POST["txtCPF"]) . "'," .
				"'" . ($_POST["cboDia"]) . "/" . ($_POST["cboMes"]) . "/" . ($_POST["cboAno"]) . "', " .
				"'" . ($_POST["cboUF"]) . "'," .
				"'" . ($_POST["txtCidade"]) . "'," .
				"'" . ($_POST["txtBairro"]) . "'," .
				"'" . ($_POST["txtRua"]) . "'," .
				"'" . ($_POST["txtNumero"]) . "'," .
				"'" . ($_POST["txtComplemento"]) . "'," .
				"'" . ($_POST["cboRegiao"]) . "'," .
				"'" . ($_POST["txtCEP"]) . "'," .
				"'" . ($_POST["txtFone"]) . "'," .
				"'" . ($_POST["txtComercial"]) . "'," .
				"'" . ($_POST["txtCelular"]) . "'," .
				"'" . ($_POST["txtEmpresa"]) . "'," .
				"" . ($_POST["txtIdade"]) . ""));
	
	if ($con->incluir($db))
	{
		echo "<br> <h1>Inclus&atilde;o efetuada com sucesso!</h1>";
		
	}else {
		echo "Ocorreu um erro. Verifique se as informa&ccedil;&otilde;es est&atilde;o corretas!<br />";
		echo "insert into " . $db[tab] . "(" . $db[campos] . ")values(" . $db[values] . ")";
	}
}

function Alterar($id)
{
	$con = new cmd_SQL();

	$db[sql]=" Update pessoa set nome = " . mb_strtoupper (utf8_decode("'" . $_POST["txtNome"] . "',")) .
					"rg = '" . mb_strtoupper (utf8_decode("" . $_POST["txtRG"] . "',")) .
					"cpf = '" . mb_strtoupper (utf8_decode("" . $_POST["txtCPF"] . "',")) .
					"data_nascimento = " . mb_strtoupper (utf8_decode("'" . ($_POST["cboDia"]) . "/" . ($_POST["cboMes"]) . "/" . ($_POST["cboAno"]) . "',")) .
					"estado = '" . mb_strtoupper (utf8_decode("" . $_POST["cboUF"] . "',")) .
					"cidade = '" . mb_strtoupper (utf8_decode("" . $_POST["txtCidade"] . "',")) .
					"bairro = '" . mb_strtoupper (utf8_decode("" . $_POST["txtBairro"] . "',")) .
					"rua = '" . mb_strtoupper (utf8_decode("" . $_POST["txtRua"] . "',")) .
					"numero = '" . mb_strtoupper (utf8_decode("" . $_POST["txtNumero"] . "',")) .
					"complemento = '" . mb_strtoupper (utf8_decode("" . $_POST["txtComplemento"] . "',")) .
					"macro_regiao = '" . mb_strtoupper (utf8_decode("" . $_POST["cboRegiao"] . "',")) .
					"cep = '" . mb_strtoupper (utf8_decode("" . $_POST["txtCEP"] . "',")) .
					"telefone_residencial = '" . mb_strtoupper (utf8_decode("" . $_POST["txtFone"] . "',")) .
					"telefone_comercial = '" . mb_strtoupper (utf8_decode("" . $_POST["txtComercial"] . "',")) .
					"celular = '" . mb_strtoupper (utf8_decode("" . $_POST["txtCelular"] . "',")) .
					"empresa = '" . mb_strtoupper (utf8_decode("" . $_POST["txtEmpresa"] . "',")) .
					"idade = " . mb_strtoupper (utf8_decode("" . $_POST["idade"] . ""));

	$db[sql]= $db[sql] . " Where idpessoa = " . $id;
	
	//echo $db[sql];
	
	if ($con->alterar($db))
	{
		echo "<br> <h1>Alterado com Sucesso!</h1>";
	}else {
		echo " Erro na altera&ccedil;&atilde;o!<br />";
		echo $db[sql];
	}
}

function Excluir(){
	$con = new cmd_SQL();

	$db[tab]="participante";
	$db[cond]="idparticipante= " . ($_POST["varID"])  . "";

	if ($con->excluir($db))
	{
		echo "true";
	}else {
		echo ""; //false;
		echo "delete from " . $db[tab] . " where " . $db[cond];
	}
}
?> 
		<center><a href="../cadastro_pessoas.html">----| Inserir Novo |----</a></center>
		</form>
	</div>
</body>
</html>