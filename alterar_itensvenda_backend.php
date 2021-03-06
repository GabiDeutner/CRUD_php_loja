<?php
error_reporting(0);
include "conexao.php";

$itensvenda_codigo1=$_POST['itensvenda_codigo'];
$ven_codigo1=$_POST['ven_codigo'];
$pro_codigo1=$_POST['pro_codigo'];
$tpp_codigo1=$_POST['tpp_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$fun_codigo1=$_POST['fun_codigo'];
$itv_embalagem1=$_POST['itv_embalagem'];
$itv_qtde1=$_POST['itv_qtde'];
$itv_valorun1=$_POST['itv_valorun'];
$itv_desc1=$_POST['itv_desc'];
$itv_valortotal1=$_POST['itv_valortotal'];


$alterar= mysql_query("UPDATE tb_itensvenda
          SET       ven_codigo = '$ven_codigo1',
                    pro_codigo = '$pro_codigo1',
                    tpp_codigo = '$tpp_codigo1',
                    nf_codigo = '$nf_codigo1',
                    tpg_codigo = '$tpg_codigo1',
                    fun_codigo = '$fun_codigo1',
                    itv_embalagem = '$itv_embalagem1',
                    itv_qtde = '$itv_qtde1',
                    itv_valorun = '$itv_valorun1',
                    itv_desc = '$itv_desc1',
                    itv_valortotal = '$itv_valortotal1'
           WHERE    itensvenda_codigo = '$itensvenda_codigo1'") 
		   or die (mysql_error());

mysql_close ($db);
include "consulta_itensvenda.php";
?>