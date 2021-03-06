<?php
include "conexao.php";
$ven_codigo1=$_POST['ven_codigo'];
$fun_codigo1=$_POST['fun_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$ven_datavenda1=$_POST['ven_datavenda'];
$ven_valortotal1=$_POST['ven_valortotal'];
$ven_observacoes1=$_POST['ven_observacoes'];

$inserir = mysql_query("INSERT INTO tb_vendas 
          (ven_codigo, fun_codigo, tpg_codigo, nf_codigo, ven_datavenda,
		  ven_valortotal,ven_observacoes)
           VALUES('$ven_codigo1','$fun_codigo1','$tpg_codigo1',
		   '$nf_codigo1','$ven_datavenda1',
		   '$ven_valortotal1','$ven_observacoes1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_vendas.php";
?>