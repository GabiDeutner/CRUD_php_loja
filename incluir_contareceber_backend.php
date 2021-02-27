<?php
include "conexao.php";
$cr_codigo1=$_POST['cr_codigo'];
$cr_valorconta1=$_POST['cr_valorconta'];
$cr_datavencimento1=$_POST['cr_datavencimento'];
$cr_datarecebimento1=$_POST['cr_datarecebimento'];
$nf_codigo1=$_POST['nf_codigo'];
$cr_observacoes1=$_POST['cr_observacoes'];

$inserir = mysql_query("INSERT INTO tb_contareceber 
          (cr_codigo,cr_valorconta, cr_datavencimento, cr_datarecebimento, nf_codigo, cr_observacoes)
           VALUES('$cr_codigo1','$cr_valorconta1',
		   '$cr_datavencimento1','$cr_datarecebimento1','$nf_codigo1',
		   '$cr_observacoes1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_contareceber.php";
?>