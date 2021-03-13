<?php
error_reporting(0);
include "conexao.php";
$tpp_codigo1=$_POST['tpp_codigo'];

$excluir = mysql_query("DELETE FROM tb_tipoproduto
			 WHERE tpp_codigo = '$tpp_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_tipoproduto.php";
?>