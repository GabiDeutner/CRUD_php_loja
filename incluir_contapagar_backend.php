<?php
include "conexao.php";
$cp_codigo1=$_POST['cp_codigo'];
$cp_valorconta1=$_POST['cp_valorconta'];
$cp_datavencimento1=$_POST['cp_datavencimento'];
$cp_datapagamento1=$_POST['cp_datapagamento'];
$nf_codigo1=$_POST['nf_codigo'];
$cp_observacoes1=$_POST['cp_observacoes'];

$inserir = mysql_query("INSERT INTO tb_contapagar
          (cp_codigo, cp_valorconta, cp_datavencimento, cp_datapagamento
		  nf_codigo,cp_observacoes)
           VALUES('$cp_codigo1','$cp_valorconta1',
		   '$cp_datavencimento1','$cp_datapagamento1','$nf_codigo1',
		   '$cp_observacoes1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_contapagar.php";
?>