<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_compras", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h2>Código</h2></td>
	<td class = 'table_titulo'><h2>Código tipo de pagamento</h2></td>
	<td class = 'table_titulo'><h2>Código do fornecedor</h2></td>
	<td class = 'table_titulo'><h2>Código Nota Fiscal</h2></td>
	<td class = 'table_titulo'><h2>Data de Compra</h2></td>
	<td class = 'table_titulo'><h2>Valor Total</h2></td>
	<td class = 'table_titulo'><h2>Observações</h2></td>
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