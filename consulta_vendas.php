<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_vendas", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
    <td><h1>Codigo Funcionario</h1></td>
	<td><h1>Codigo Tipo Pagamento</h1></td>
	<td><h1>Codigo Nota Fiscal</h1></td>
    <td><h1>Data Venda</h1></td>
    <td><h1>Valor Total</h1></td>
    <td><h1>Observacoes</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["ven_codigo"]."</td>
          <td>".$row["fun_codigo"]."</td>
          <td>".$row["tpg_codigo"]."</td> 
		  <td>".$row["nf_codigo"]."<td>
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