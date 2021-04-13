<html>
<head>
<title>Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>

<body>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>


<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Produtos </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_produtos", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Código Produto</h3></td>
	<td class = 'table_titulo'><h3>Descrição</h3></td>
	<td class = 'table_titulo'><h3>Código Tipo Produto</h3></td>
	<td class = 'table_titulo'><h3>Preço Custo</h3></td>
    <td class = 'table_titulo'><h3>Preço Venda</h3></td>
    <td class = 'table_titulo'><h3>Estoque</h3></td>
    <td class = 'table_titulo'><h3>Embalagem</h3></td>
    <td class = 'table_titulo'><h3>IPI</h3></td>

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