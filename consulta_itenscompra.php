<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_itenscompra", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo Itens Compra</h1></td>
    <td><h1>Codigo Compra</h1></td>
    <td><h1>Codigo Produto</h1></td>
    <td><h1>Codigo Tipo de Produto</h1></td>
    <td><h1>Codigo Nota Fiscal</h1></td>
    <td><h1>Codigo Fornecedor</h1></td>
    <td><h1>Codigo Tipo de Pagamento</h1></td>
    <td><h1>Embalagem</h1></td>
	<td><h1>Quantidade</h1></td>
	<td><h1>Valor Unidade</h1></td>
	<td><h1>Desconto</h1></td>
    <td><h1>Valor Total</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["itenscompra_codigo"]."</td>
          <td>".$row["com_codigo"]."</td>
          <td>".$row["pro_codigo"]."</td>
          <td>".$row["tpp_codigo"]."</td>
          <td>".$row["nf_codigo"]."</td>
          <td>".$row["for_codigo"]."</td>
          <td>".$row["tpg_codigo"]."</td>
		  <td>".$row["itc_embalagem"]."</td>
          <td>".$row["itc_qtde"]."</td>
          <td>".$row["itc_valorun"]."</td>
          <td>".$row["itc_desc"]."</td>
          <td>".$row["itc_valortotal"]."</td>

	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->