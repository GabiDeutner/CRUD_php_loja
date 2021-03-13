<?php
error_reporting(0);
include "conexao.php";
$tpg_codigo1=$_POST['tpg_codigo'];

$excluir = mysql_query("DELETE FROM tb_tipopagto
			 WHERE tpg_codigo = '$tpg_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_tipopagto.php";
?>