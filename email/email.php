<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require ("phpmailer/PHPMailerAutoload.php");
require("phpmailer/class.smtp.php");
require_once("phpmailer/class.phpmailer.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conex�o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem ser� SMTP
$mail->Host = "smtp.gmail.com"; // Endere�o do servidor SMTP
$mail->SMTPAuth = false; // Usa autentica��o SMTP? (opcional)
$mail->Username = 'davi.pereirasilva@gmail.com'; // Usu�rio do servidor SMTP
$mail->Password = 'concurso2015'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "davi.pereirasilva@gmail.com"; // Seu e-mail
$mail->FromName = "davi.pereirasilva@gmail.com"; // Seu nome
// Define os destinat�rio(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('davi.pereirasilva@gmail.com', 'davisilva@guarulhos.sp.gov.br');
//$mail->AddAddress('ciclano@site.net');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta
// Define os dados t�cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = "Este � o corpo da mensagem de teste, em <b>HTML</b>!  :)";
$mail->AltBody = "Este � o corpo da mensagem de teste, em Texto Plano! \r\n :)";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinat�rios e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "N�o foi poss�vel enviar o e-mail.";
  echo "<b>Informa��es do erro:</b> " . $mail->ErrorInfo;
}
?>