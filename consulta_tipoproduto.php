<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Tipo de Produto </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_tipoproduto", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Código Tipo de Produto</h3></td>
	<td class = 'table_titulo'><h3>Descrição</h3></td>

</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["tpp_codigo"]."</td>
          <td>".$row["tpp_descricao"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->