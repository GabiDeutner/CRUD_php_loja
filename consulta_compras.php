<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Compras </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_compras", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Código Compra</h3></td>
	<td class = 'table_titulo'><h3>Código Tipo de Pagamento</h3></td>
	<td class = 'table_titulo'><h3>Código do Fornecedor</h3></td>
	<td class = 'table_titulo'><h3>Código Nota Fiscal</h3></td>
	<td class = 'table_titulo'><h3>Data de Compra</h3></td>
	<td class = 'table_titulo'><h3>Valor Total</h3></td>
	<td class = 'table_titulo'><h3>Observações</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["com_codigo"]."</td>
          <td>".$row["tpg_codigo"]."</td>
		  <td>".$row["for_codigo"]."</td>
		  <td>".$row["nf_codigo"]."</td>
		  <td>".$row["com_datacompra"]."</td>
		  <td>".$row["com_valortotal"]."</td>
		  <td>".$row["com_observacoes"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->