<?php
error_reporting(0);
include "conexao.php";
$itensvenda_codigo1=$_POST['itensvenda_codigo'];

$excluir = mysql_query("DELETE FROM tb_itensvenda
			 WHERE itensvenda_codigo = '$itensvenda_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_itensvenda.php";
?>