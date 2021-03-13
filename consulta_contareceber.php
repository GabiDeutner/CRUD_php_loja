<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_contareceber", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Valor Conta</h1></td>
	<td><h1>Data Vencimento</h1></td>
	<td><h1>Data Recebimento</h1></td>
    <td><h1>Código Nota Fiscal</h1></td>
    <td><h1>Observações</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["cr_codigo"]."</td>
          <td>".$row["cr_valorconta"]."</td>
		  <td>".$row["cr_datavencimento"]."</td>
		  <td>".$row["cr_datarecebimento"]."</td>
          <td>".$row["nf_codigo"]."</td>
          <td>".$row["cr_observacoes"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->