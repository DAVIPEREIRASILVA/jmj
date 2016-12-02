$().ready(function() {
	//FORMULARIO PAIS
	$("#frmCadPais").validate({
		rules: {
			"txtPais": { required: true}
		},
		messages: {
			"txtPais": "Preencha o Pa&iacute;s!"
		}
	});
	
	$("#cmdSalvarPais").click(function(){
	    if($("#frmCadPais").valid()){
	    	submitForm();	
	    }
	});
	
	//FORMULARIO CIDADE
	$("#frmCadCidade").validate({
		rules: {
			"cboPais": { required: true},
			"txtCidade": { required: true},
			"txtSenha": { required: true}
		},
		messages: {
			"cboPais": "Selecione o Pa&iacute;s!",
			"txtCidade": "Digite a Cidade!",
			"txtSenha": "Digite a Senha!"
		}
	});
	
	$("#cmdSalvarCidade").click(function(){
	    if($("#frmCadCidade").valid()){
	    	submitForm();	
	    }
	});
	
	//FORMULARIO TURNO
	$("#frmCadTurno").validate({
		rules: {
			"cboCidade": { required: true},
			"txtTurno": { required: true}
		},
		messages: {
			"cboCidade": "Selecione a Cidade!",
			"txtTurno": "Digite o Turno!"
		}
	});
	
	$("#cmdSalvarTurno").click(function(){
	    if($("#frmCadTurno").valid()){
	    	submitForm();	
	    }
	});
	
	//FORMULARIO DADOS ANO
	$("#frmCadDadosAno").validate({
		rules: {
			"txtPopTotal": { required: true, number: true},
			"txtEducandos": { required: true, number: true},
			"txtEducadores": { required: true, number: true},
			"txtEscolas": { required: true, number: true},
			"txtCriJovEscolar": { required: true, number: true},
			"txtCriJovMat": { required: true, number: true},
			"txtJovAdultosSupCompleto": { required: true, number: true},
			"txtAnalfabetismo": { required: true, number: true},
			"txtAlunosSalaRegular": { required: true, number: true},
			"txtAlunosSalaEspecial": { required: true, number: true},
			"txtEducInclusao": { required: true, number: true},
			"txtEscolaIntegral": { required: true, number: true},
			"txtEscolaParcial": { required: true, number: true},
			"txtMatriculaInicio": { required: true, number: true},
			"txtMatriculaFinal": { required: true, number: true},
			"txtRepetencia": { required: true, number: true},
			"txtInfrequencia": { required: true, number: true},
			"txtAcessoInternet": { required: true, number: true},
			"txtTransporte": { required: true, number: true},
			"txtUniforme": { required: true, number: true},
			"txtAlimentacao": { required: true, number: true}
		},
		messages: {
			"txtPopTotal": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEducandos": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEducadores": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEscolas": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtCriJovEscolar": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtCriJovMat": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtJovAdultosSupCompleto": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAnalfabetismo": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAlunosSalaRegular": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAlunosSalaEspecial": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEducInclusao": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEscolaIntegral": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEscolaParcial": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtMatriculaInicio": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtMatriculaFinal": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtRepetencia": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtInfrequencia": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAcessoInternet": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtTransporte": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtUniforme": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAlimentacao": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"}
		}
	});
	
	$("#cmdSalvarDadosAno").click(function(){
	    if($("#frmCadDadosAno").valid()){
	    	submitForm();	
	    }
	});
	
	//FORMULARIO DADOS TURNO
	$("#frmCadDadosTurno").validate({
		rules: {
			"cboTurno": { required: true},
			"txtEducandosTurno": { required: true, number: true},
			"txtEducadoresTurno": { required: true, number: true},
			"txtAlunosSalaRegularTurno": { required: true, number: true},
			"txtAlunosSalaEspecialTurno": { required: true, number: true},
			"txtEducInclusaoTurno": { required: true, number: true},
			"txtMatriculaInicioTurno": { required: true, number: true},
			"txtMatriculaFinalTurno": { required: true, number: true}
		},
		messages: {
			"cboTurno": { required: "Selecione o turno!"},
			"txtEducandosTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEducadoresTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAlunosSalaRegularTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtAlunosSalaEspecialTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtEducInclusaoTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtMatriculaInicioTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"},
			"txtMatriculaFinalTurno": { required: "Digite o valor!", number: "Digite apenas n&uacute;meros!"}
		}
	});
	
	$("#cmdSalvarDadosTurno").click(function(){
	    if($("#frmCadDadosTurno").valid()){
	    	adicionarTurno();	
	    }
	});
});
