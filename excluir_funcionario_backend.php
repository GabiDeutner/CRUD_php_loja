<?php
error_reporting(0);
include "conexao.php";
$fun_codigo1=$_POST['fun_codigo'];

$excluir = mysql_query("DELETE FROM tb_funcionario
			 WHERE fun_codigo = '$fun_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>