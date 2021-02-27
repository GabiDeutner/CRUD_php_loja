<?php
include "conexao.php";
$tpg_codigo1=$_POST['tpg_codigo'];
$tpg_descricao1=$_POST['tpg_descricao'];
$tpg_qtde1=$_POST['tpg_qtde'];
$tpg_ativo1=$_POST['tpg_ativo'];

$inserir = mysql_query("INSERT INTO tb_tipopagto 
          (tpg_codigo,tpg_descricao,tpg_qtde,tpg_ativo)
           VALUES('$tpg_codigo1','$tpg_descricao1',
		   '$tpg_qtde1','$tpg_ativo1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_tipopagto.php";
?>