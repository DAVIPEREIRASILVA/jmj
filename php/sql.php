<?php
session_start();
include '../php/conexao_mysql.php'; 

switch ($_POST ["filtro"]) {

    case 'cadPessoa':
        cadPessoa();
        break;
    case 'upDatePessoa':
        upDatePessoa();
        break;
    case 'cadCasal':
      	cadCasal();
       	break;
    case 'cadAta':
       	cadAta();
       	break;
    case 'upDateAta':
    	upDateAta();
    	break;
    default:
    break;}


function cadPessoa(){
$txtnome = $_POST['txtNome'];   // Recendo o que foi digitado no campo nome do formulário.
$cboSexo= $_POST['cboSexo'];   // Recendo o que foi digitado no campo nome do formulário.
$txtDtNasc= $_POST['txtDtNasc'];   // Recendo o que foi digitado no campo nome do formulário.
$cboComunidade= $_POST['cboComunidade'];   // Recendo o que foi digitado no campo nome do formulário.
$txtTelFixo= $_POST['txtTelFixo'];   // Recendo o que foi digitado no campo nome do formulário.
$txtTelCel= $_POST['txtTelCel'];   // Recendo o que foi digitado no campo nome do formulário.
$txtEmail= $_POST['txtEmail'];   // Recendo o que foi digitado no campo nome do formulário.
$txtNomeResponsavel= $_POST['txtNomeResponsavel'];   // Recendo o que foi digitado no campo nome do formulário.
$txtCelResponsavel= $_POST['txtCelResponsavel'];   // Recendo o que foi digitado no campo nome do formulário.
		
	$query = mysql_query("INSERT INTO PESSOA (NOME, SEXO, NASC, COMUNIDADE, TEL_FIXO, CELULAR, EMAIL, NOME_RESP, CEL_RESP) VALUES ('$txtnome','$cboSexo','$txtDtNasc','$cboComunidade','$txtTelFixo','$txtTelCel','$txtEmail','$txtNomeResponsavel','$txtCelResponsavel' )");
	echo $query;
}

function upDatePessoa(){
	
	$hdnIdPessoa = $_POST['hdnIdPessoa'];   // Recendo o que foi digitado no campo nome do formulário.		
	$txtnome = $_POST['txtNome'];   // Recendo o que foi digitado no campo nome do formulário.
	$cboSexo= $_POST['cboSexo'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtDtNasc= $_POST['txtDtNasc'];   // Recendo o que foi digitado no campo nome do formulário.
	$cboComunidade= $_POST['cboComunidade'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtTelFixo= $_POST['txtTelFixo'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtTelCel= $_POST['txtTelCel'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtEmail= $_POST['txtEmail'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtNomeResponsavel= $_POST['txtNomeResponsavel'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtCelResponsavel= $_POST['txtCelResponsavel'];   // Recendo o que foi digitado no campo nome do formulário.

	$result = mysql_query("UPDATE PESSOA SET NOME='$txtnome', SEXO='$cboSexo', NASC='$txtDtNasc', COMUNIDADE='$cboComunidade', TEL_FIXO='$txtTelFixo', CELULAR='$txtTelCel', EMAIL='$txtEmail', NOME_RESP='$txtNomeResponsavel', CEL_RESP='$txtCelResponsavel' WHERE ID_PESSOA=$hdnIdPessoa");
	if ($result != 1) {
  	  die('Invalid query: ' . mysql_error());
	}else{ echo $result;}
}





function cadCasal(){
	$txtNomeEsposo = $_POST['txtNomeEsposo'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtNomeEsposa= $_POST['txtNomeEsposa'];   // Recendo o que foi digitado no campo nome do formulário.
	$cboComunidadeCasal= $_POST['cboComunidadeCasal'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtTelFixoCasal= $_POST['txtTelFixoCasal'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtTelCelCasal= $_POST['txtTelCelCasal'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtEmailCasal= $_POST['txtEmailCasal'];   // Recendo o que foi digitado no campo nome do formulário.
	$cboIntencaoCasal= $_POST['cboIntencaoCasal'];   // Recendo o que foi digitado no campo nome do formulário.

	$result = mysql_query("INSERT INTO CASAL (NOME_ESPOSO, NOME_ESPOSA, COMUNIDADE, TEL_FIXO, CELULAR, EMAIL, INTENCAO) VALUES ('$txtNomeEsposo','$txtNomeEsposa','$cboComunidadeCasal','$txtTelFixoCasal','$txtTelCelCasal','$txtEmailCasal','$cboIntencaoCasal' )");
	if ($result != 1) {
		die('Invalid query: ' . mysql_error());
	}else{ echo $result;}
}


function cadAta(){
	$txtData = $_POST['txtData'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtLocal = $_POST['txtLocal'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtParticipantes = $_POST['txtParticipantes'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtPauta = $_POST['txtPauta'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtDiscusoes = $_POST['txtDiscusoes'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtEncaminhamentos = $_POST['txtEncaminhamentos'];   // Recendo o que foi digitado no campo nome do formulário.

	$query = mysql_query("INSERT INTO ATA (DATA, LOCAL, PARTICIPANTES, PAUTA, DISCUSOES, ENCAMINHAMENTOS) VALUES	('$txtData','$txtLocal','$txtParticipantes','$txtPauta','$txtDiscusoes','$txtEncaminhamentos')");
	echo $query;
}

function upDateAta(){

	$hdnIdAta = $_POST['hdnIdAta'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtData = $_POST['txtData'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtLocal = $_POST['txtLocal'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtParticipantes = $_POST['txtParticipantes'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtPauta = $_POST['txtPauta'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtDiscusoes = $_POST['txtDiscusoes'];   // Recendo o que foi digitado no campo nome do formulário.
	$txtEncaminhamentos = $_POST['txtEncaminhamentos'];   // Recendo o que foi digitado no campo nome do formulário.
	
	$result = mysql_query("UPDATE ATA SET DATA='$txtData', LOCAL='$txtLocal', PARTICIPANTES='$txtParticipantes', PAUTA='$txtPauta', DISCUSOES='$txtDiscusoes', ENCAMINHAMENTOS='$txtEncaminhamentos' WHERE ID_ATA=$hdnIdAta");
	if ($result != 1) {
		die('Invalid query: ' . mysql_error());
	}else{ echo $result;}
}






?>			