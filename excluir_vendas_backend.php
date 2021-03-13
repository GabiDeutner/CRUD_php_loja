<?php
error_reporting(0);
include "conexao.php";
$ven_codigo1=$_POST['ven_codigo'];

$excluir = mysql_query("DELETE FROM tb_vendas
			 WHERE ven_codigo = '$ven_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_vendas.php";
?>