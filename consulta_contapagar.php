<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_contapagar", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Valor Conta</h1></td>
	<td><h1>Data Vencimento</h1></td>
	<td><h1>Data Pagamento</h1></td>
    <td><h1>Código Nota Fiscal</h1></td>
    <td><h1>Observações</h1></td>
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