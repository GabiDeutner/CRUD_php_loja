<?php
include "conexao.php";
$com_codigo1=$_POST['com_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$for_codigo1=$_POST['for_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$com_datacompra1=$_POST['com_datacompra'];
$com_valortotal1=$_POST['com_valortotal'];
$com_observacoes1=$_POST['com_observacoes'];

$inserir = mysql_query("INSERT INTO tb_compras 
          (com_codigo,tpg_codigo,for_codigo,nf_codigo,com_datacompra,
		  com_valortotal,com_observacoes)
           VALUES('$com_codigo1','$tpg_codigo1',
		   '$for_codigo1','$nf_codigo1','$com_datacompra1',
		   '$com_valortotal1','$com_observacoes1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_compras.php";
?>