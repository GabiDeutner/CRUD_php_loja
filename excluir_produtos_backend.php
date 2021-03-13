<?php
error_reporting(0);
include "conexao.php";
$pro_codigo1=$_POST['pro_codigo'];

$excluir = mysql_query("DELETE FROM tb_produtos
			 WHERE pro_codigo = '$pro_codigo1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_produtos.php";
?>