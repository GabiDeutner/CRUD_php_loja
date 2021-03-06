<?php
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

$inserir = mysql_query("INSERT INTO tb_fornecedor 
          (for_codigo,for_nome,for_endereco,for_numero,for_bairro,for_cidade,for_uf,
           for_cnpjcpf,for_rgie,for_telefone,for_fax,for_celular,for_email)
           VALUES('$for_codigo1','$for_nome1','$for_endereco1','$for_numero1','$for_bairro1','$for_cidade1',
           '$for_uf1','$for_cnpjcpf1','$for_rgie1','$for_telefone1','$for_fax1','$for_celular1','$for_email1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_fornecedor.php";
?>