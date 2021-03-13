<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_notafiscal", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Valor</h1></td>
	<td><h1>Taxa imposto</h1></td>
	<td><h1>Valor imposto</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["nf_codigo"]."</td>
          <td>".$row["nf_valornf"]."</td>
		  <td>".$row["nf_taxaimpostonf"]."</td>
		  <td>".$row["nf_valorimposto"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->