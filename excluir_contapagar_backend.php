<?php
error_reporting(0);
include "conexao.php";
$cp_codigo1=$_POST['cp_codigo'];

$excluir = mysql_query("DELETE FROM tb_contapagar
			 WHERE cp_codigo = '$cp_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_contapagar.php";
?>