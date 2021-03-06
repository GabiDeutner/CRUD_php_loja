<?php
error_reporting(0); 
include "conexao.php";

$ven_codigo1=$_POST['ven_codigo'];
$fun_codigo1=$_POST['fun_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$ven_datavenda1=$_POST['ven_datavenda'];
$ven_valortotal1=$_POST['ven_valortotal'];
$ven_observacoes1=$_POST['ven_observacoes'];

$alterar = mysql_query("UPDATE tb_vendas 
           SET  fun_codigo = '$fun_codigo1', 
                tpg_codigo = '$tpg_codigo1', 
                nf_codigo = '$nf_codigo1', 
                ven_datavenda = '$ven_datavenda1',
		        ven_valortotal = '$ven_valortotal1',
                ven_observacoes = '$ven_observacoes1'
         WHERE  ven_codigo = '$ven_codigo1'") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_vendas.php";
?>