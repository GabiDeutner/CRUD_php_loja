<?php
include "conexao.php";
$for_codigo1=$_POST['fun_codigo'];
$fun_nome1=$_POST['fun_nome'];
$fun_endereco1=$_POST['fun_endereco'];
$fun_numero1=$_POST['fun_numero'];
$fun_complemento1=$_POST['fun_complemento'];
$fun_bairro1=$_POST['fun_bairro'];
$fun_cidade1=$_POST['fun_cidade'];
$fun_uf1=$_POST['fun_uf'];
$fun_cnpjcpf1=$_POST['fun_cnpjcpf'];
$fun_rgie1=$_POST['fun_rgie'];
$fun_sexo1=$_POST['fun_sexo'];
$fun_nascimento1=$_POST['fun_nascimento'];
$fun_telefone1=$_POST['fun_telefone'];
$fun_celular1=$_POST['fun_celular'];
$fun_email1=$_POST['fun_email'];
$fun_salario1=$_POST['fun_salario'];

$inserir = mysql_query("INSERT INTO tb_funcionario 
          (fun_codigo, fun_nome, fun_endereco, fun_numero, fun_complemento
          fun_bairro, fun_cidade
          fun_uf, fun_cnpjcpf, fun_rgie, fun_sexo,
          fun_nascimento, fun_telefone,
          for_celular, for_email, fun_salario)
           VALUES('$for_codigo1','$for_endereco1',
		   '$for_numero1','$for_bairro1','$for_cidade1',
		   '$for_uf1','$for_cnpjcpf1', '$for_rgie1', 
           '$for_telefone1','$for_fax1', '$for_celular1', '$for_email1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>