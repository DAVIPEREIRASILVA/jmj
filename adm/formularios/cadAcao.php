<?php

include '../../php/conexao_mysql.php';

// cria a instruÁ„o SQL que vai selecionar os dados da query
$idAcao = $_GET['idAcao'];

$query = sprintf("SELECT * FROM ACAO WHERE ID_ACAO='$idAcao'");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);





?>



<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JMJ 2019- Panam√°</title>


		<script src="../../js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="../../js/ajax.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../js/jquery.js"></script>
                
<script type="text/javascript" src="../../js/inscricao.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
 
        <!-- Content -->
    
    <div>
      <div>
	    <input type="hidden" id="hdnIdAcao" value="<?=$linha['ID_ACAO']?>">
           <table border="0" cellspacing="0" cellpadding="2" align="center">
                <caption><h3>Cadastro da A&ccedil;&atilde;o</h3></caption>
                <tbody>	
			        <tr>
			            <td colspan="3">   
			                Nome da A&ccedil;&atilde;o:<br/>
			            </td>
			       </tr>
			       <tr>     
			            <td colspan="2">    
			                <input type="text" id="txtNome" size="25" value="<?=$linha['NOME']?>">
			            </td>
			       </tr>
                	<tr>
                		<td>Inicio:</td>
                		<td colspan="2"><input type="date" id="txtDataInicio" size="25" value="<?=$linha['DATA_INICIO']?>"></td>
                	</tr>
                	<tr>
                		<td>Fim:</td>
                		<td colspan="2"><input type="date" id="txtDataFim" size="25" value="<?=$linha['DATA_FIM']?>"></td>
                	</tr>
					<tr>
                		<td colspan="3">
                		Descri&ccedil;&atilde;o:<br/>
                		<textarea style="height:75px;" id="txtDescricao"><?=$linha['DESCRICAO']?></textarea>
                	</tr>
                	<tr>
                		<td align="center" colspan="3" >
                			<input type="button" value="Salvar A&ccedil;&atilde;o" onclick="salvarAcao()">
                		</td>
                	</tr>
                	
                	
                	
			     </tbody>
			</table>

			<div id="divParticipantes" <?=($linha['ID_ACAO']!=''?'':'style="display:none"')?>>			
			<table align="center" border="1">
				<caption><h3>Participantes</h3></caption>
				<thead>
									
					<tr>
						<td >
						</td>
						<td>
							Grupo
						</td>
						<td>
							Nome
						</td>
						<td>
							Colabora&ccedil;&atilde;o
						</td>
					</tr>
				</thead>
				<tr>
					<td width="12%" align="center" >
						<input type="checkbox" id="cbId1" onclick="mudarStatusParticipacao(1,1)" checked="checked">
					</td>
					<td>
						G-1
					</td>
					<td>
						Fulano de tal
					</td>
					<td>
						<input type="text"/ id="txtId1">
					</td>
				</tr>
			
			</table>
			</div>
			
			
			     
		</div>
	</div>

        
        <!-- Javascript -->
        <script src="../../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/js/jquery.backstretch.min.js"></script>
        <script src="../../assets/js/jquery.countdown.min.js"></script>
        <script src="../../assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>