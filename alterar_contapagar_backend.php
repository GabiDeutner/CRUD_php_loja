<?php
error_reporting(0);
include "conexao.php";

$cp_codigo1=$_POST['cp_codigo'];
$cp_valorconta1=$_POST['cp_valorconta'];
$cp_datavencimento1=$_POST['cp_datavencimento'];
$cp_datapagamento1=$_POST['cp_datapagamento'];
$nf_codigo1=$_POST['nf_codigo'];
$cp_observacoes1=$_POST['cp_observacoes'];

$alterar = mysql_query("UPDATE tb_contapagar
          SET   cp_valorconta = '$cp_valorconta1',
                cp_datavencimento = '$cp_datavencimento1', 
                cp_datapagamento = '$cp_datapagamento1',
		        nf_codigo = '$nf_codigo1',
                cp_observacoes = '$cp_observacoes1'
           WHERE cp_codigo = '$cp_codigo1'") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_contapagar.php";
?>