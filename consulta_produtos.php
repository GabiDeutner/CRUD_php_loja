<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_produtos", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Descricao</h1></td>
	<td><h1>Codigo Tipo Produto</h1></td>
	<td><h1>Preco Custo</h1></td>
    <td><h1>Preco Venda</h1></td>
    <td><h1>Estoque</h1></td>
    <td><h1>Embalagem</h1></td>
    <td><h1>IPI</h1></td>

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