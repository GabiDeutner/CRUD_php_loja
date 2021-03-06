<?php
error_reporting(0);
include "conexao.php";

$tpg_codigo1=$_POST['tpg_codigo'];
$tpg_descricao1=$_POST['tpg_descricao'];
$tpg_qtde1=$_POST['tpg_qtde'];
$tpg_ativo1=$_POST['tpg_ativo'];

$alterar = mysql_query("UPDATE tb_tipopagto 
           SET      tpg_descricao = '$tpg_descricao1',
                    tpg_qtde = '$tpg_qtde1',
                    tpg_ativo = '$tpg_ativo1'
          WHERE     tpg_codigo = '$tpg_codigo1'") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_tipopagto.php";
?>