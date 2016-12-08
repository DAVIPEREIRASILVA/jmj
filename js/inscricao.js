$(document).ready(function () {
});


function salvarPessoa(){

	if(document.getElementById('hdnIdPessoa').value!=''){	
		dados="";
		
		dados = "hdnIdPessoa=" + document.getElementById('hdnIdPessoa').value;
		dados += "&txtNome=" + document.getElementById('txtNome').value;
		dados += "&cboSexo=" + document.getElementById('cboSexo').value;
		dados += "&txtDtNasc=" + document.getElementById('txtDtNasc').value;
		dados += "&cboComunidade=" + document.getElementById('cboComunidade').value;
		dados += "&txtTelFixo=" + document.getElementById('txtTelFixo').value;
		dados += "&txtTelCel=" + document.getElementById('txtTelCel').value;
		dados += "&txtEmail=" + document.getElementById('txtEmail').value;
		dados += "&txtNomeResponsavel=" + document.getElementById('txtNomeResponsavel').value;
		dados += "&txtCelResponsavel=" + document.getElementById('txtCelResponsavel').value;

		var varResposta = chamar_ajax('../../php/sql.php', 'filtro=upDatePessoa&'+dados, false, 'text', null);
		if (varResposta==1){
			alert('Cadastro Efetuado com sucesso!');
			window.open("http://guarulhosjmj2019.esy.es/adm/formularios/consPessoa.php", "_self");		}
	}else{	
		dados = "txtNome=" + document.getElementById('txtNome').value;
		dados += "&cboSexo=" + document.getElementById('cboSexo').value;
		dados += "&txtDtNasc=" + document.getElementById('txtDtNasc').value;
		dados += "&cboComunidade=" + document.getElementById('cboComunidade').value;
		dados += "&txtTelFixo=" + document.getElementById('txtTelFixo').value;
		dados += "&txtTelCel=" + document.getElementById('txtTelCel').value;
		dados += "&txtEmail=" + document.getElementById('txtEmail').value;
		dados += "&txtNomeResponsavel=" + document.getElementById('txtNomeResponsavel').value;
		dados += "&txtCelResponsavel=" + document.getElementById('txtCelResponsavel').value;
		
			var varResposta = chamar_ajax('../php/sql.php', 'filtro=cadPessoa&'+dados, false, 'text', null);
			if (varResposta==1){
				alert('Cadastro Efetuado com sucesso!');
				window.open("http://guarulhosjmj2019.esy.es/adm/formularios/consPessoa.php", "_self");
			}
		}
}


function exibeFormSolteiro(){
	$("#divFormSolteiro").show('fast');
	$("#divFormCasal").hide('fast');
	};

	function exibeFormCasal(){
		$("#divFormCasal").show('fast');
		$("#divFormSolteiro").hide('fast');
		};		
		
		
function verificamenor(){
	
	nascimento= document.getElementById('txtDtNasc').value;
	limite= "2001-03-31";
	
	if (nascimento > limite){
		alert('Provavelmente você será de menor na JMJ, favor cadastrar os dados de um responsável');
		
		$("#trDadosResponsavel").show('fast');
		$("#trNomeResponsavel").show('fast');
		$("#trCelResponsavel").show('fast');
	}
}



function detalhePessoa(det){
	window.open("detPessoa.php?idPessoa="+det,"_self");
}

function detalheCasal(det){
	window.open("detPessoa.php?idCasal="+det,"_self");
}



function salvarCasal(){

	if(document.getElementById('hdnIdCasal').value!=''){	
		dados="";
		
		dados = "hdnIdCasal=" + document.getElementById('hdnIdCasal').value;
		dados += "&txtNomeEsposo=" + document.getElementById('txtNomeEsposo').value;
		dados += "&txtNomeEsposa=" + document.getElementById('txtNomeEsposa').value;
		dados += "&cboComunidadeCasal=" + document.getElementById('cboComunidadeCasal').value;
		dados += "&txtTelFixoCasal=" + document.getElementById('txtTelFixoCasal').value;
		dados += "&txtTelCelCasal=" + document.getElementById('txtTelCelCasal').value;
		dados += "&txtEmailCasal=" + document.getElementById('txtEmailCasal').value;
		dados += "&cboIntencaoCasal=" + document.getElementById('cboIntencaoCasal').value;
		
		var varResposta = chamar_ajax('../../php/sql.php', 'filtro=upDateCasal&'+dados, false, 'text', null);
		if (varResposta==1){
			alert('Cadastro Efetuado com sucesso!');
			window.open("http://guarulhosjmj2019.esy.es/", "_self");
		}
	}else{	
		dados = "txtNomeEsposo=" + document.getElementById('txtNomeEsposo').value;
		dados += "&txtNomeEsposa=" + document.getElementById('txtNomeEsposa').value;
		dados += "&cboComunidadeCasal=" + document.getElementById('cboComunidadeCasal').value;
		dados += "&txtTelFixoCasal=" + document.getElementById('txtTelFixoCasal').value;
		dados += "&txtTelCelCasal=" + document.getElementById('txtTelCelCasal').value;
		dados += "&txtEmailCasal=" + document.getElementById('txtEmailCasal').value;
		dados += "&cboIntencaoCasal=" + document.getElementById('cboIntencaoCasal').value;
		
			var varResposta = chamar_ajax('../php/sql.php', 'filtro=cadCasal&'+dados, false, 'text', null);
			if (varResposta==1){
				alert('Cadastro Efetuado com sucesso!');
				window.open("http://guarulhosjmj2019.esy.es/", "_self");
			}
		}
}

function salvarAta(){

	if(document.getElementById('hdnIdAta').value!=''){	
		dados="";
		
		dados = "hdnIdAta=" + document.getElementById('hdnIdAta').value;
		dados += "&txtData=" + document.getElementById('txtData').value;
		dados += "&txtLocal=" + document.getElementById('txtLocal').value;
		dados += "&txtParticipantes=" + document.getElementById('txtParticipantes').value;
		dados += "&txtPauta=" + document.getElementById('txtPauta').value;
		dados += "&txtDiscusoes=" + document.getElementById('txtDiscusoes').value;
		dados += "&txtEncaminhamentos=" + document.getElementById('txtEncaminhamentos').value;
		
		var varResposta = chamar_ajax('../../php/sql.php', 'filtro=upDateAta&'+dados, false, 'text', null);
		if (varResposta==1){
			alert('Cadastro Efetuado com sucesso!');
			window.open("http://guarulhosjmj2019.esy.es/", "_self");
		}
	}else{	
		dados = "txtData=" + document.getElementById('txtData').value;
		dados += "&txtLocal=" + document.getElementById('txtLocal').value;
		dados += "&txtParticipantes=" + document.getElementById('txtParticipantes').value;
		dados += "&txtPauta=" + document.getElementById('txtPauta').value;
		dados += "&txtDiscusoes=" + document.getElementById('txtDiscusoes').value;
		dados += "&txtEncaminhamentos=" + document.getElementById('txtEncaminhamentos').value;
		
			var varResposta = chamar_ajax('../php/sql.php', 'filtro=cadAta&'+dados, false, 'text', null);
			if (varResposta==1){
				alert('Cadastro Efetuado com sucesso!');
				window.open("http://guarulhosjmj2019.esy.es/", "_self");
			}
		}
}

