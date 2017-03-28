<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);



// definições de host, database, usuário e senha
$host = "mysql.hostinger.com.br";
$db   = "u480003925_jmj";
$user = "u480003925_jmj";
$pass = "331088";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);



/*
// definições de host, database, usuário e senha
$host = "172.16.208.29";
$db   = "educacentro";
$user = "root";
$pass = "t30r3m4";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);

*/




?>

