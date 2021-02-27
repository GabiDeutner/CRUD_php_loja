<?php
include "conexao.php";
$itenscompra_codigo1=$_POST['itenscompra_codigo'];
$com_codigo1=$_POST['com_codigo'];
$pro_codigo1=$_POST['pro_codigo'];
$tpp_codigo1=$_POST['tpp_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$for_codigo1=$_POST['for_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$itc_embalagem1=$_POST['itc_embalagem'];
$itc_qtde1=$_POST['itc_qtde'];
$itc_valorun1=$_POST['itc_valorun'];
$itc_desc1=$_POST['itc_desc'];
$itc_valortotal1=$_POST['itc_valortotal'];


$inserir = mysql_query("INSERT INTO tb_itenscompra 
          (itenscompra_codigo,com_codigo,pro_codigo,tpp_codigo,nf_codigo,for_codigo,tpg_codigo,itc_embalagem,
           itc_qtde,itc_valorun,itc_desc,itc_valortotal)
           VALUES('$itenscompra_codigo1','$com_codigo1','$pro_codigo1','$tpp_codigo1','$nf_codigo1',
           '$for_codigo1','$tpg_codigo1','$itc_embalagem1','$itc_qtde1','$itc_valorun1','$itc_desc1',
           '$itc_valortotal1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_itenscompra.php";
?>