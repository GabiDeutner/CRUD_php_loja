<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Funcionários </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_funcionario", $db);
echo "<center><table border='1'>
<tr>
	  <td class = 'table_titulo'><h3>Código Funcionário</h3></td>
	  <td class = 'table_titulo'><h3>Nome</h3></td>
	  <td class = 'table_titulo'><h3>Endereço</h3></td>
	  <td class = 'table_titulo'><h3>Número</h3></td>
    <td class = 'table_titulo'><h3>Complemento</h3></td>
    <td class = 'table_titulo'><h3>Bairro</h3></td>
    <td class = 'table_titulo'><h3>Cidade</h3></td>
    <td class = 'table_titulo'><h3>UF</h3></td>
    <td class = 'table_titulo'><h3>CNPJCPF</h3></td>
    <td class = 'table_titulo'><h3>RGIE</h3></td>
    <td class = 'table_titulo'><h3>Sexo</h3></td>
    <td class = 'table_titulo'><h3>Nascimento</h3></td>
    <td class = 'table_titulo'><h3>Telefone</h3></td>
    <td class = 'table_titulo'><h3>Celular</h3></td>
    <td class = 'table_titulo'><h3>E-mail</h3></td>
    <td class = 'table_titulo'><h3>Salário</h3></td>
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