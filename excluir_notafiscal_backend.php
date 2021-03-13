<?php
error_reporting(0);
include "conexao.php";
$nf_codigo1=$_POST['nf_codigo'];

$excluir = mysql_query("DELETE FROM tb_notafiscal
			 WHERE nf_codigo = '$nf_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_notafiscal.php";
?>