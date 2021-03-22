<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Produtos </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_produtos", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Codigo</h3></td>
	<td class = 'table_titulo'><h3>Descricao</h3></td>
	<td class = 'table_titulo'><h3>Codigo Tipo Produto</h3></td>
	<td class = 'table_titulo'><h3>Preco Custo</h3></td>
    <td class = 'table_titulo'><h3>Preco Venda</h3></td>
    <td class = 'table_titulo'><h3>Estoque</h3></td>
    <td class = 'table_titulo'><h3>Embalagem</h3></td>
    <td class = 'table_titulo'><h3>IPI</h3></td>

</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["pro_codigo"]."</td>
          <td>".$row["pro_descricao"]."</td>
          <td>".$row["tpp_codigo"]."</td>
		  <td>".$row["pro_precocusto"]."</td>
		  <td>".$row["pro_precovenda"]."</td>
          <td>".$row["pro_estoque"]."</td>
          <td>".$row["pro_embalagem"]."</td>
          <td>".$row["pro_ipi"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->