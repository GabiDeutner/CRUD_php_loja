<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Vendas </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_vendas", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Codigo</h3></td>
    <td class = 'table_titulo'><h3>Codigo Funcionario</h3></td>
	<td class = 'table_titulo'><h3>Codigo Tipo Pagamento</h3></td>
	<td class = 'table_titulo'><h3>Codigo Nota Fiscal</h3></td>
    <td class = 'table_titulo'><h3>Data Venda</h3></td>
    <td class = 'table_titulo'><h3>Valor Total</h3></td>
    <td class = 'table_titulo'><h3>Observacoes</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["ven_codigo"]."</td>
          <td>".$row["fun_codigo"]."</td>
          <td>".$row["tpg_codigo"]."</td> 
		  <td>".$row["nf_codigo"]."</td>
          <td>".$row["ven_datavenda"]."</td>
          <td>".$row["ven_valortotal"]."</td>
          <td>".$row["ven_observacoes"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->