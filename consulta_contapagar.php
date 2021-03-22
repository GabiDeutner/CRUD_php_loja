<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Contas a Pagar </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_contapagar", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Codigo</h3></td>
	<td class = 'table_titulo'><h3>Valor Conta</h3></td>
	<td class = 'table_titulo'><h3>Data Vencimento</h3></td>
	<td class = 'table_titulo'><h3>Data Pagamento</h3></td>
    <td class = 'table_titulo'><h3>Código Nota Fiscal</h3></td>
    <td class = 'table_titulo'><h3>Observações</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["cp_codigo"]."</td>
          <td>".$row["cp_valorconta"]."</td>
		  <td>".$row["cp_datavencimento"]."</td>
		  <td>".$row["cp_datapagamento"]."</td>
          <td>".$row["nf_codigo"]."</td>
          <td>".$row["cp_observacoes"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->