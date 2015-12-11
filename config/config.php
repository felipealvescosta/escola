<?php
 
//conexão com o servidor
$conect = mysql_connect("localhost", "root", "felipe007");
 
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect) die ("<h1>Falha na conexao com o Banco de Dados!</h1>");
 
// Caso a conexão seja aprovada, então conecta o Banco de Dados.	
$db = mysql_select_db("agenda");
 
/*Configurando este arquivo, depois é só você dar um include em suas paginas php, 
isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
você altera somente um arquivo*/


?>

