<?php

include '../../php/conexao_mysql.php';

// cria a instru��o SQL que vai selecionar os dados da query1
$query = sprintf("SELECT * FROM ATA ORDER BY DATA");
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
        <title>JMJ 2019- Panamá</title>


		<script src="../../js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="../../js/ajax.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../js/jquery.js"></script>
                
		<script type="text/javascript" src="../../js/inscricao.js"></script>

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

 				<div id="divPessoas">
 					<div>

 						<table border="1" align="center">
 						<caption><h3>Atas cadastradas: <?php echo $total;?></h3></caption>
 							<thead>
 								<tr bgcolor="#708090" style="color:#ffffff;">
 									<td style="vertical-align: middle;" align="center" color="#ffffff">
 										Data
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										Local
 									</td>
 									<td style="vertical-align: middle;" align="center" color="#ffffff" class="oculta_td" >
 										Participantes
 									<td style="vertical-align: middle;" align="center" color="#ffffff">
 										Detalhes
 									</td>
 
 									</td>
 								</tr>
 							</thead>
 							<tbody>
<?php
	// se o n�mero de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
<tr><td><?=$linha['DATA']?></td>
<td  class="oculta_td"><?=$linha['LOCAL']?></td>
<td  class="oculta_td"><?=$linha['PARTICIPANTES']?></td>
<td style="vertical-align: middle;" align="center"><a href="#" onclick="detalheAta('<?=$linha['ID_ATA']?>')"><img src="../images/cadastro.png"></a></td></tr>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
                				       <tr>
			       	<td colspan="4" align="center">
			       		<input type="button" value="Cadastrar nova Ata" onclick="novaAta()">
			       	</td>
			       </tr>
					             </tbody>
 						</table>
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