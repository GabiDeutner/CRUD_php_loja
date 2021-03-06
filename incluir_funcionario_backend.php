<?php
include "conexao.php";
$fun_codigo1=$_POST['fun_codigo'];
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
           VALUES('$fun_codigo1','$fun_nome1','$fun_endereco1','$fun_numero1',
           '$fun_complemento1','$fun_bairro1', '$fun_cidade1', '$fun_uf1',
            '$fun_cnpjcpf1','$fun_rgie1','$fun_sexo1','$fun_nascimento1','$fun_telefone1',
             '$fun_celular1', '$fun_email1', '$fun_salario1')") 
		   or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>