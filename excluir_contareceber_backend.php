<?php
error_reporting(0);
include "conexao.php";
$cr_codigo1=$_POST['cr_codigo'];

$excluir = mysql_query("DELETE FROM tb_contareceber
			 WHERE cr_codigo = '$cr_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_contareceber.php";
?>