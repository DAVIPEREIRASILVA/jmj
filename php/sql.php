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

    
    default:
    break;}


function cadPessoa(){
$txtnome = $_POST['txtNome'];   // Recendo o que foi digitado no campo nome do formul�rio.
$cboSexo= $_POST['cboSexo'];   // Recendo o que foi digitado no campo nome do formul�rio.
$txtDtNasc= $_POST['txtDtNasc'];   // Recendo o que foi digitado no campo nome do formul�rio.
$cboComunidade= $_POST['cboComunidade'];   // Recendo o que foi digitado no campo nome do formul�rio.
$txtTelFixo= $_POST['txtTelFixo'];   // Recendo o que foi digitado no campo nome do formul�rio.
$txtTelCel= $_POST['txtTelCel'];   // Recendo o que foi digitado no campo nome do formul�rio.
$txtEmail= $_POST['txtEmail'];   // Recendo o que foi digitado no campo nome do formul�rio.
$txtNomeResponsavel= $_POST['txtNomeResponsavel'];   // Recendo o que foi digitado no campo nome do formul�rio.
$txtCelResponsavel= $_POST['txtCelResponsavel'];   // Recendo o que foi digitado no campo nome do formul�rio.
		
	$query = mysql_query("INSERT INTO PESSOA (NOME, SEXO, NASC, COMUNIDADE, TEL_FIXO, CELULAR, EMAIL, NOME_RESP, CEL_RESP) VALUES ('$txtnome','$cboSexo','$txtDtNasc','$cboComunidade','$txtTelFixo','$txtTelCel','$txtEmail','$txtNomeResponsavel','$txtCelResponsavel' )");
	echo $query;
}




function upDatePessoa(){
	
	$hdnIdPessoa = $_POST['hdnIdPessoa'];   // Recendo o que foi digitado no campo nome do formul�rio.		
	$txtnome = $_POST['txtNome'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$cboSexo= $_POST['cboSexo'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtDtNasc= $_POST['txtDtNasc'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$cboComunidade= $_POST['cboComunidade'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtTelFixo= $_POST['txtTelFixo'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtTelCel= $_POST['txtTelCel'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtEmail= $_POST['txtEmail'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtNomeResponsavel= $_POST['txtNomeResponsavel'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtCelResponsavel= $_POST['txtCelResponsavel'];   // Recendo o que foi digitado no campo nome do formul�rio.

	$result = mysql_query("UPDATE PESSOA SET NOME='$txtnome', SEXO='$cboSexo', NASC='$txtDtNasc', COMUNIDADE='$cboComunidade', TEL_FIXO='$txtTelFixo', CELULAR='$txtTelCel', EMAIL='$txtEmail', NOME_RESP='$txtNomeResponsavel', CEL_RESP='$txtCelResponsavel' WHERE ID_PESSOA=$hdnIdPessoa");
	if ($result != 1) {
  	  die('Invalid query: ' . mysql_error());
	}else{ echo $result;}
}





function cadCasal(){
	$txtNomeEsposo = $_POST['txtNomeEsposo'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtNomeEsposa= $_POST['txtNomeEsposa'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$cboComunidadeCasal= $_POST['cboComunidadeCasal'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtTelFixoCasal= $_POST['txtTelFixoCasal'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtTelCelCasal= $_POST['txtTelCelCasal'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$txtEmailCasal= $_POST['txtEmailCasal'];   // Recendo o que foi digitado no campo nome do formul�rio.
	$cboIntencaoCasal= $_POST['cboIntencaoCasal'];   // Recendo o que foi digitado no campo nome do formul�rio.

	$query = mysql_query("INSERT INTO CASAL (NOME_ESPOSO, NOME_ESPOSA, COMUNIDADE, TEL_FIXO, CELULAR, EMAIL, INTENCAO) VALUES ('$txtNomeEsposo','$txtNomeEsposa','$cboComunidadeCasal','$txtTelFixoCasal','$txtTelCelCasal','$txtEmailCasal','$cboIntencaoCasal' )");
	echo $query;
}







?>			