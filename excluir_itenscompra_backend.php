<?php
error_reporting(0);
include "conexao.php";
$itenscompra_codigo1=$_POST['itenscompra_codigo'];

$excluir = mysql_query("DELETE FROM tb_itenscompra
			 WHERE itenscompra_codigo = '$itenscompra_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_itenscompra.php";
?>