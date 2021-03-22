<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Itens Compra </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_itenscompra", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Codigo Itens Compra</h3></td>
    <td class = 'table_titulo'><h3>Codigo Compra</h3></td>
    <td class = 'table_titulo'><h3>Codigo Produto</h3></td>
    <td class = 'table_titulo'><h3>Codigo Tipo de Produto</h3></td>
    <td class = 'table_titulo'><h3>Codigo Nota Fiscal</h3></td>
    <td class = 'table_titulo'><h3>Codigo Fornecedor</h3></td>
    <td class = 'table_titulo'><h3>Codigo Tipo de Pagamento</h3></td>
    <td class = 'table_titulo'><h3>Embalagem</h3></td>
	<td class = 'table_titulo'><h3>Quantidade</h3></td>
	<td class = 'table_titulo'><h3>Valor Unidade</h3></td>
	<td class = 'table_titulo'><h3>Desconto</h3></td>
    <td class = 'table_titulo'><h3>Valor Total</h3></td>
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