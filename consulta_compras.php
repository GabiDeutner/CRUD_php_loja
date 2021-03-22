<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_compras", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Código</h1></td>
	<td><h1>Código tipo de pagamento</h1></td>
	<td><h1>Código do fornecedor</h1></td>
	<td><h1>Código Nota Fiscal</h1></td>
	<td><h1>Data de Compra</h1></td>
	<td><h1>Valor Total</h1></td>
	<td><h1>Observações</h1></td>
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