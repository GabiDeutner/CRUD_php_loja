<?php
error_reporting(0);
include "conexao.php";
$nf_codigo1=$_POST['nf_codigo'];
$nf_valornf1=$_POST['nf_valornf'];
$nf_taxaimpostonf1=$_POST['nf_taxaimpostonf'];
$nf_valorimposto1=$_POST['nf_valorimposto'];

$alterar = mysql_query("UPDATE tb_notafiscal 
          (SET nf_valornf = '$nf_valornf1',
          nf_taxaimpostonf = '$nf_taxaimpostonf1',
          nf_valorimposto = '$nf_valorimposto1'
           WHERE nf_codigo = '$nf_codigo1'")
           
		   or die (mysql_error());
mysql_close ($db);
include "consulta_notafiscal.php";
?>