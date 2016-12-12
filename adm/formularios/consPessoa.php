<?php

include '../../php/conexao_mysql.php';

// cria a instruÁ„o SQL que vai selecionar os dados da query
$query = sprintf("SELECT * FROM PESSOA WHERE ID_STATUS <> '2' ORDER BY ID_GRUPO, COMUNIDADE, NOME");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);


// cria a instruÁ„o SQL que vai selecionar os dados da query1
$query1 = sprintf("SELECT * FROM PESSOA WHERE ID_STATUS = '2' ORDER BY ID_GRUPO, COMUNIDADE, NOME");
// executa a query
$dados1 = mysql_query($query1, $con) or die(mysql_error());
// transforma os dados em um array
$linha1 = mysql_fetch_assoc($dados1);
// calcula quantos dados retornaram
$total1 = mysql_num_rows($dados1);

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
		<script type="text/javascript" language="javascript" src="../../MacDataTables/Scripts/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="../../MacDataTables/Scripts/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#tabPessoasAtivas').dataTable();
				$('#tabPessoasInativas').dataTable();
			} );
		</script>
		
		

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
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
 <?php include '../header.php' ?>
        <!-- Content -->

 
            <table align="center" border="0">
            	<caption>
            		<p align="center"><h3>Status</h3></p>
            	</caption>
            	<tbody>
            		<tr>
            			<td align="right" style="width: 50%;"><input type="radio" style="width: 10%;" name="tipoStatus" value="ativo" onclick="exibeTabAtivo()">Ativo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				        <td align="left" style="width: 50%;"><input type="radio" style="width: 10%;" name="tipoStatus" value="inativo" onclick="exibeTabInativo()">Inativo</td>
				  	</tr>	
	  			</tbody>
	  		</table> 
 
 
 
 
 <!-- *******************InÌcio Tabela de Pessoas Ativas*************************** -->	  
 				<div id="divPessoasAtivas" style= "display:block">
 					<div>
 						<table border="1" align="center" id="tabPessoasAtivas">
 						<caption><h3>Jovens Cadastrados (Ativos): <?php echo $total;?></h3></caption>
 							<thead>
 								<tr bgcolor="#708090" style="color:#ffffff;">
 									<td style="vertical-align: middle;" align="center">
 										Grupo
 									</td>
 									<td style="vertical-align: middle;" align="center">
 										Com
 									</td>
 									<td style="vertical-align: middle;" align="center">
 										Nome
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td">
 										Nascimento
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										Celular
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										T Fixo
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										E_mail
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										Nome_Resp
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										Cel_Resp
 									</td>
 									<td style="vertical-align: middle;" align="center">
 										Detalhes
 									</td>
 								</tr>
 							</thead>
 							<tbody>
<?php
	// se o n˙mero de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
<tr>
<td>G-<?=$linha['ID_GRUPO']?></td>
<td><?=$linha['COMUNIDADE']?></td>
<td><?=$linha['NOME']?></td>
<td class="oculta_td"><?=$linha['NASC']?></td>
<td class="oculta_td"><?=$linha['CELULAR']?></td>
<td class="oculta_td"><?=$linha['TEL_FIXO']?></td>
<td class="oculta_td"><?=$linha['EMAIL']?></td>
<td class="oculta_td"><?=$linha['NOME_RESP']?></td>
<td class="oculta_td"><?=$linha['CEL_RESP']?></td>

<td style="vertical-align: middle;" align="center"><a href="#" onclick="detalhePessoa('<?=$linha['ID_PESSOA']?>')"><img src="../images/cadastro.png"></a></td></tr>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
					             </tbody>
 						</table>
					</div>     	 
				</div>
<!-- *******************Fim Tabela de Pessoas Ativas*************************** -->


<!-- *******************InÌcio Tabela de Pessoas Inativas*************************** -->	  
 				<div id="divPessoasInativas" style="display:none">
 					<div>
 						<table border="1" align="center" id="tabPessoasInativas">
 						<caption><h3>Jovens Cadastrados (Inativos): <?php echo $total1;?></h3></caption>
 							<thead>
 								<tr bgcolor="#708090" style="color:#ffffff;">
 									<td style="vertical-align: middle;" align="center">
 										Grupo
 									</td>
 									<td style="vertical-align: middle;" align="center">
 										Com
 									</td>
 									<td style="vertical-align: middle;" align="center">
 										Nome
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td">
 										Nascimento
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										Celular
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										T Fixo
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										E_mail
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										Nome_Resp
 									</td>
 									<td style="vertical-align: middle;" align="center" class="oculta_td" >
 										Cel_Resp
 									</td>
 									<td style="vertical-align: middle;" align="center">
 										Detalhes
 									</td>
 								</tr>
 							</thead>
 							<tbody>
<?php
	// se o n˙mero de resultados for maior que zero, mostra os dados
	if($total1 > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
<tr>
<td><?=$linha1['ID_GRUPO']?></td>
<td><?=$linha1['COMUNIDADE']?></td>
<td><?=$linha1['NOME']?></td>
<td class="oculta_td"><?=$linha1['NASC']?></td>
<td class="oculta_td"><?=$linha1['CELULAR']?></td>
<td class="oculta_td"><?=$linha1['TEL_FIXO']?></td>
<td class="oculta_td"><?=$linha1['EMAIL']?></td>
<td class="oculta_td"><?=$linha1['NOME_RESP']?></td>
<td class="oculta_td"><?=$linha1['CEL_RESP']?></td>

<td style="vertical-align: middle;" align="center"><a href="#" onclick="detalhePessoa('<?=$linha1['ID_PESSOA']?>')"><img src="../images/cadastro.png"></a></td></tr>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha1 = mysql_fetch_assoc($dados1));
	// fim do if 
	}
?>
					             </tbody>
 						</table>
					</div>     	 
				</div>
<!-- *******************Fim Tabela de Pessoas Inativas*************************** -->				
				
				
				
        
        <!-- Javascript -->

        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/js/jquery.backstretch.min.js"></script>
        <script src="../../assets/js/jquery.countdown.min.js"></script>
        <script src="../../assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>