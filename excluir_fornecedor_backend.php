<?php
error_reporting(0);
include "conexao.php";
$for_codigo1=$_POST['for_codigo'];

$excluir = mysql_query("DELETE FROM tb_fornecedor
			 WHERE for_codigo = '$for_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_fornecedor.php";
?>