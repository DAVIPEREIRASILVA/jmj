<?php



// cria a instruÁ„o SQL que vai selecionar os dados da query1
$idPessoa = $_GET['idPessoa'];
$idCasal = $_GET['idCasal'];


$query = sprintf("SELECT * FROM PESSOA WHERE ID_PESSOA='$idPessoa' ORDER BY NOME");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);



$query1 = sprintf("SELECT * FROM CASAL WHERE ID_CASAL='$idCasal' ORDER BY NOME_ESPOSO");
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


		<script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="../js/ajax.js" type="text/javascript"></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
                
		<script type="text/javascript" src="../js/inscricao.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
 
        <!-- Content -->

    
    <div>
            <div>
            <table align="center">
            	<caption>
            		<h3>Tipo de cadastro</h3>
            	</caption>
            	<tbody>
            		<tr>
            			<td>
				            <input type="radio" name="tipoCadastro" value="casal" onclick="exibeFormCasal()"> Casal
				  			<input type="radio" name="tipoCadastro" value="solteiro" onclick="exibeFormSolteiro()"> Solteiro
				  		</td>
				  	</tr>	
	  			</tbody>
	  		</table>
	  		
	  		
<!-- *******************InÌcio Formul·rio dos Casados*************************** -->	  		
	    <div id="divFormCasal" <?=($linha1['ID_CASAL']!=''?'style="display:block"':'style="display:none"')?>>
	    <input type="hidden" id="hdnIdCasal" value="<?=$linha1['ID_CASAL']?>">
                <table border="0" cellspacing="0" cellpadding="2" align="center">
                <caption><h3>Formulario de Inscricao- Casal</h3></caption>
                <tbody>	
                	<tr>
                		<td>Nome do Esposo:</td>
                		<td colspan="2"><input type="text" id="txtNomeEsposo" size="25" value="<?=$linha1['NOME_ESPOSO']?>"></td>
                	</tr>
                	<tr>
                		<td>Nome da Esposa:</td>
                		<td colspan="2"><input type="text" id="txtNomeEsposa" size="25" value="<?=$linha1['NOME ESPOSA']?>"></td>
                	</tr>
                	<tr>
			        	<td>
			        		Comun:
			        	</td>
			        	<td  colspan="4">
			        		<select id="cboComunidade">
			                				<option value="1" <?=($linha1['COMUNIDADE']=='1'?'Selected':'')?>>1&ordf; Comunidade</option>
			                				<option value="2" <?=($linha1['COMUNIDADE']=='2'?'Selected':'')?> >2&ordf; Comunidade</option>
			                				<option value="3" <?=($linha1['COMUNIDADE']=='3'?'Selected':'')?>>3&ordf; Comunidade</option>
			                				<option value="4" <?=($linha1['COMUNIDADE']=='4'?'Selected':'')?>>4&ordf; Comunidade</option>
			                				<option value="5" <?=($linha1['COMUNIDADE']=='5'?'Selected':'')?>>5&ordf; Comunidade</option>
			                				<option value="6" <?=($linha1['COMUNIDADE']=='6'?'Selected':'')?>>6&ordf; Comunidade</option>
			                				<option value="7" <?=($linha1['COMUNIDADE']=='7'?'Selected':'')?>>7&ordf; Comunidade</option>
			                				<option value="8" <?=($linha1['COMUNIDADE']=='8'?'Selected':'')?>>8&ordf; Comunidade</option>
			                				<option value="9" <?=($linha1['COMUNIDADE']=='9'?'Selected':'')?>>9&ordf; Comunidade</option>
			                				<option value="10" <?=($linha1['COMUNIDADE']=='10'?'Selected':'')?>>10&ordf; Comunidade</option>
			                				<option value="11" <?=($linha1['COMUNIDADE']=='11'?'Selected':'')?>>11&ordf; Comunidade</option>
			                			</select>
			            </td>
			        </tr>
			        <tr>
			            <td>   
			                Tel Fixo:
			            </td>
			            <td colspan="2">    
			                <input type="text" id="txtTelFixoCasal" size="25" value="<?=$linha1['TEL_FIXO']?>">
			            </td>
			       </tr>
			        <tr>
			            <td >   
			                Celular:
			            </td>
			            <td colspan="2">    
			                <input type="text" id="txtTelCelCasal"  size="25" value="<?=$linha1['CELULAR']?>">
			            </td>
			       </tr>
			        <tr>
			            <td>   
			                Email:
			            </td>
			            <td colspan="2">    
			                <input type="text" id="txtEmailCasal" size="25"  value="<?=$linha1['EMAIL']?>">
			            </td>
			       </tr>
			       </tr>
			     	<tr>
			        	<td>
			        		Pretende:
			        	</td>
			        	<td  colspan="2">
			        		<select id="cboIntencaoCasal">
			                				<option value="1" <?=($linha1['INTENCAO']=='1'?'Selected':'')?>>Apenas ajudar</option>
			                				<option value="2" <?=($linha1['INTENCAO']=='2'?'Selected':'')?>>Apenas ir</option>
			                				<option value="3" <?=($linha1['INTENCAO']=='3'?'Selected':'')?>>Ajudar e ir</option>

			                			</select>
			            </td>
			        </tr>
			       			       
			       <tr>
			       	<td colspan="4" align="center">
			       		<input type="button" value="Enviar" onclick="salvarCasal()">
			       	</td>
			       </tbody>
                </table>     
                </div>
              

 <!-- *******************Final Formul·rio dos Casados*************************** -->   
   
   
<!-- *******************InÌcio Formul·rio dos Solteiros*************************** -->  
   
   
            <div id="divFormSolteiro" <?=($linha['ID_PESSOA']!=''?'style="display:block"':'style="display:none"')?>>
            <input type="hidden" id="hdnIdPessoa" value="<?=$linha['ID_PESSOA']?>">
                <table border="0" cellspacing="0" cellpadding="2" align="center">
                <caption><h3>Formulario de Inscricao- Solteiro</h3></caption>
                
                	<tr>
                		<td>Nome:</td>
                		<td colspan="4"><input type="text" id="txtNome" size="31" value="<?=$linha['NOME']?>"></td>
                	</tr>

			        <tr>
			        	<td>
			        		Comun:
			        	</td>
			        	<td  colspan="4">
			        		<select id="cboComunidade">
			                				<option value="1" <?=($linha['COMUNIDADE']=='1'?'Selected':'')?>>1&ordf; Comunidade</option>
			                				<option value="2" <?=($linha['COMUNIDADE']=='2'?'Selected':'')?> >2&ordf; Comunidade</option>
			                				<option value="3" <?=($linha['COMUNIDADE']=='3'?'Selected':'')?>>3&ordf; Comunidade</option>
			                				<option value="4" <?=($linha['COMUNIDADE']=='4'?'Selected':'')?>>4&ordf; Comunidade</option>
			                				<option value="5" <?=($linha['COMUNIDADE']=='5'?'Selected':'')?>>5&ordf; Comunidade</option>
			                				<option value="6" <?=($linha['COMUNIDADE']=='6'?'Selected':'')?>>6&ordf; Comunidade</option>
			                				<option value="7" <?=($linha['COMUNIDADE']=='7'?'Selected':'')?>>7&ordf; Comunidade</option>
			                				<option value="8" <?=($linha['COMUNIDADE']=='8'?'Selected':'')?>>8&ordf; Comunidade</option>
			                				<option value="9" <?=($linha['COMUNIDADE']=='9'?'Selected':'')?>>9&ordf; Comunidade</option>
			                				<option value="10" <?=($linha['COMUNIDADE']=='10'?'Selected':'')?>>10&ordf; Comunidade</option>
			                				<option value="11" <?=($linha['COMUNIDADE']=='11'?'Selected':'')?>>11&ordf; Comunidade</option>
			                			</select>
			            </td>
			        </tr>
			        <tr>
			            <td>   
			                Tel Fixo:
			            </td>
			            <td colspan="4">    
			                <input type="text" id="txtTelFixo" size="31" value="<?=$linha['TEL_FIXO']?>">
			            </td>
			       </tr>
			        <tr>
			            <td >   
			                Celular:
			            </td>
			            <td colspan="4">    
			                <input type="text" id="txtTelCel"  size="31" value="<?=$linha['CELULAR']?>">
			            </td>
			       </tr>
			        <tr>
			            <td>   
			                Email:
			            </td>
			            <td colspan="4">    
			                <input type="text" id="txtEmail" size="31" value="<?=$linha['EMAIL']?>">
			            </td>
			       </tr>
                	<tr>
                		<td>	
			                Sexo:
			            </td>
			            <td><select id="cboSexo">
			                				<option value="Masculino">Masc</option>
			                				<option value="Feminino">Femi</option>
			                </select>
			            </td>
			            <td >    
			                Nasc:
			            </td>
			            <td>
			            	<input type="date" size="21" id="txtDtNasc" name="txtDtNasc" placeholder="00/00/0000" onblur="verificamenor()" value="<?=$linha['NASC']?>">
			            </td>
			        </tr>
			        
			        <tr <?=($linha['NOME_RESP']!=''?'':'style="display:none"')?> id="trDadosResponsavel">
			        	<td align="center" colspan="5"><br/>
			        		<b>Dados do Responsavel</b>
			        	<td>
			        </tr>
			        
			        <tr <?=($linha['NOME_RESP']!=''?'':'style="display:none"')?> id="trNomeResponsavel">
                		<td>Nome Resp:</td>
                		<td colspan="4"><input type="text" id="txtNomeResponsavel" size="31" value="<?=$linha['NOME_RESP']?>"></td>
                	</tr>
			        <tr <?=($linha['NOME_RESP']!=''?'':'style="display:none"')?>	id="trCelResponsavel">
                		<td>Cel Resp:</td>
                		<td colspan="4"><input type="text" id="txtCelResponsavel" size="31" value="<?=$linha['CEL_RESP']?>"></td>
                	</tr>
                	
			       <tr>
			       	<td colspan="4" align="center">
			       		<input type="button" value="Enviar" onclick="salvarPessoa()">
			       	</td>
			       </tr>
                </table>    
                </div>
                
<!-- *******************Final Formul·rio dos Solteiros*************************** -->                
                
            </div>
        </div>

        
        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/jquery.countdown.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>