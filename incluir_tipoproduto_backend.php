<?php
include "conexao.php";
$tpp_codigo1=$_POST['tpp_codigo'];
$tpp_descricao1=$_POST['tpp_descricao'];


$inserir = mysql_query("INSERT INTO tb_tipoproduto
          (tpp_codigo,tpp_descricao)
           VALUES('$tpp_codigo1','$tpp_descricao1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_tipoproduto.php";
?>