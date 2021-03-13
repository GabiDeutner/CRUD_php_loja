<?php
error_reporting(0);
include "conexao.php";
$com_codigo1=$_POST['com_codigo'];

$excluir = mysql_query("DELETE FROM tb_compras
			 WHERE com_codigo = '$com_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_compras.php";
?>