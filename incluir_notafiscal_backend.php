<?php
include "conexao.php";
$nf_codigo1=$_POST['nf_codigo'];
$nf_valornf1=$_POST['nf_valornf'];
$nf_taxaimpostonf1=$_POST['nf_taxaimpostonf'];
$nf_valorimposto1=$_POST['nf_valorimposto'];

$inserir = mysql_query("INSERT INTO tb_notafiscal 
          (nf_codigo,nf_valornf,nf_taxaimpostonf,nf_valorimposto)
           VALUES('$nf_codigo1','$nf_valornf1',
		   '$nf_taxaimpostonf1','$nf_valorimposto1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_notafiscal.php";
?>