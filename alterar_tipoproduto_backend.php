<?php
error_reporting(0);
include "conexao.php";

$tpp_codigo1=$_POST['tpp_codigo'];
$tpp_descricao1=$_POST['tpp_descricao'];


$alterar= mysql_query("UPDATE tb_tipoproduto
            SET   tpp_descricao = '$tpp_descricao1'
            WHERE tpp_codigo = '$tpp_codigo1'")
		   or die (mysql_error());
mysql_close ($db);
include "consulta_tipoproduto.php";
?>