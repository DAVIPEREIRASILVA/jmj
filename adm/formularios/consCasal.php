<?php
/*
include '../../php/conexao_mysql.php';

// cria a instrução SQL que vai selecionar os dados da query1
$query = sprintf("SELECT * FROM CASAL ORDER BY COMUNIDADE, NOME_ESPOSO");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
*/
?>


<!DOCTYPE html>
<html>

    <head>

	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>DataTables example - Zero configuration</title>
	<link rel="stylesheet" type="text/css" href="../../DataTables-master/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../DataTables-master/examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="../../DataTables-master/examples/resources/demo.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js">
	</script>
	<script type="text/javascript" language="javascript" src="../../DataTables-master/media/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" src="../../DataTables-master/examples/resources/syntax/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="../../DataTables-master/examples/resources/demo.js">
	</script>    
	<script type="text/javascript" language="javascript" class="init">
	

$(document).ready(function() {
	$('#tabCasal').DataTable();
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
 <?php /* include '../header.php' */?>
        <!-- Content -->

 				<div id="divPessoas">
 					<div>
 						<?php echo $total;?>
 						<table border="1" align="center" id="tabCasal">
 						<caption><h3>Casais Cadastrados: <?php echo $total;?></h3></caption>
 							<thead>
 								<tr bgcolor="#708090" style="color:#ffffff;">
 									<td style="vertical-align: middle;" align="center" color="#ffffff">
 										Com
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" >
 										Esposo
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										Esposa
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										T Fixo
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										Celular
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										Email
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										Inten&ccedil;&atilde;o
 									</td>
 									<td style="vertical-align: middle;" align="center" >
 										Detalhes
 									</td>
 								</tr>
 							</thead>
 							<tbody>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
<tr><td><?=$linha['COMUNIDADE']?></td>
<td><?=$linha['NOME_ESPOSO']?></td>
<td class="oculta_td"><?=$linha['NOME_ESPOSA']?></td>
<td class="oculta_td"><?=$linha['TEL_FIXO']?></td>
<td class="oculta_td"><?=$linha['CELULAR']?></td>
<td class="oculta_td"><?=$linha['EMAIL']?></td>
<td class="oculta_td"><?=$linha['INTENCAO']?></td>
<td style="vertical-align: middle;" align="center"><a href="#" onclick="detalheCasal('<?=$linha['ID_CASAL']?>')"><img src="../images/cadastro.png"></a></td></tr>
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


        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>