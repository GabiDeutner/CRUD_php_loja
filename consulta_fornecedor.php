<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos">Fornecedores </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_fornecedor", $db);
echo "<center><table border='1'>
<tr>
	  <td class = 'table_titulo'><h3>Codigo</h3></td>
	  <td class = 'table_titulo'><h3>Nome</h3></td>
	  <td class = 'table_titulo'><h3>Endereco</h3></td>
	  <td class = 'table_titulo'><h3>Numero</h3></td>
    <td class = 'table_titulo'><h3>Bairro</h3></td>
    <td class = 'table_titulo'><h3>Cidade</h3></td>
    <td class = 'table_titulo'><h3>UF</h3></td>
    <td class = 'table_titulo'><h3>CNPJCPF</h3></td>
    <td class = 'table_titulo'><h3>RGIE</h3></td>
    <td class = 'table_titulo'><h3>Telefone</h3></td>
    <td class = 'table_titulo'><h3>Fax</h3></td>
    <td class = 'table_titulo'><h3>Celular</h3></td>
    <td class = 'table_titulo'><h3>Email</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["for_codigo"]."</td>
          <td>".$row["for_nome"]."</td>
		  <td>".$row["for_endereco"]."</td>
		  <td>".$row["for_numero"]."</td>
          <td>".$row["for_bairro"]."</td>
          <td>".$row["for_cidade"]."</td>
          <td>".$row["for_uf"]."</td>
          <td>".$row["for_cnpjcpf"]."</td>
          <td>".$row["for_rgie"]."</td>
          <td>".$row["for_telefone"]."</td>
          <td>".$row["for_fax"]."</td>
          <td>".$row["for_celular"]."</td>
          <td>".$row["for_email"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->