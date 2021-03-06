<?php
error_reporting(0);
include "conexao.php";
$for_codigo1=$_POST['for_codigo'];
$for_nome1=$_POST['for_nome'];
$for_endereco1=$_POST['for_endereco'];
$for_numero1=$_POST['for_numero'];
$for_bairro1=$_POST['for_bairro'];
$for_cidade1=$_POST['for_cidade'];
$for_uf1=$_POST['for_uf'];
$for_cnpjcpf1=$_POST['for_cnpjcpf'];
$for_rgie1=$_POST['for_rgie'];
$for_telefone1=$_POST['for_telefone'];
$for_fax1=$_POST['for_fax'];
$for_celular1=$_POST['for_celular'];
$for_email1=$_POST['for_email'];

$alterar = mysql_query("UPDATE tb_fornecedor 
          SET   for_nome = '$for_nome1',
                for_endereco = '$for_endereco1', 
                for_numero = '$for_numero1', 
                for_bairro = '$for_bairro1', 
                for_cidade = '$for_cidade1',
                for_uf = '$for_uf1', 
                for_cnpjcpf = '$for_cnpjcpf1', 
                for_rgie = '$for_rgie1', 
                for_telefone = '$for_telefone1',
                for_fax = '$for_fax1', 
                for_celular = '$for_celular1', 
                for_email = '$for_email1'
        WHERE   for_codigo = '$for_codigo1'") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_fornecedor.php";
?>