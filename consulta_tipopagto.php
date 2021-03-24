<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Tipo de Pagamento </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_tipopagto", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Código Tipo de Pagamento</h3></td>
	<td class = 'table_titulo'><h3>Descrição</h3></td>
    <td class = 'table_titulo'><h3>Quantidade</h3></td>
    <td class = 'table_titulo'><h3>Ativo</h3></td>

</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["tpg_codigo"]."</td>
          <td>".$row["tpg_descricao"]."</td>
          <td>".$row["tpg_qtde"]."</td>
          <td>".$row["tpg_ativo"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->