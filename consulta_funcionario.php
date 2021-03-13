<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_funcionario", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Nome</h1></td>
	<td><h1>Endereco</h1></td>
	<td><h1>Numero</h1></td>
    <td><h1>Complemento</h1></td>
    <td><h1>Bairro</h1></td>
    <td><h1>Cidade</h1></td>
    <td><h1>UF</h1></td>
    <td><h1>CNPJCPF</h1></td>
    <td><h1>RGIE</h1></td>
    <td><h1>Sexo</h1></td>
    <td><h1>Nascimento</h1></td>
    <td><h1>Telefone</h1></td>
    <td><h1>Celular</h1></td>
    <td><h1>Email</h1></td>
    <td><h1>Salario</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["fun_codigo"]."</td>
          <td>".$row["fun_nome"]."</td>
		  <td>".$row["fun_endereco"]."</td>
		  <td>".$row["fun_numero"]."</td>
          <td>".$row["fun_complemento"]."</td>
          <td>".$row["fun_bairro"]."</td>
          <td>".$row["fun_cidade"]."</td>
          <td>".$row["fun_uf"]."</td>
          <td>".$row["fun_cnpjcpf"]."</td>
          <td>".$row["fun_rgie"]."</td>
          <td>".$row["fun_sexo"]."</td>
          <td>".$row["fun_nascimento"]."</td>
          <td>".$row["fun_telefone"]."</td>
          <td>".$row["fun_celular"]."</td>
          <td>".$row["fun_email"]."</td>
          <td>".$row["fun_salario"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->