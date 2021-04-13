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
<h1 class="titulos"> Itens Venda </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_itensvenda", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Código Item Venda</h3></td>
    <td class = 'table_titulo'><h3>Código Venda</h3></td>
    <td class = 'table_titulo'><h3>Código Produto</h3></td>
    <td class = 'table_titulo'><h3>Código Tipo de Produto</h3></td>
    <td class = 'table_titulo'><h3>Código Nota Fiscal</h3></td>
    <td class = 'table_titulo'><h3>Código Tipo de Pagamento</h3></td>
    <td class = 'table_titulo'><h3>Código Funcionário</h3></td>
    <td class = 'table_titulo'><h3>Embalagem</h3></td>
	<td class = 'table_titulo'><h3>Quantidade</h3></td>
	<td class = 'table_titulo'><h3>Valor Unidade</h3></td>
	<td class = 'table_titulo'><h3>Desconto</h3></td>
    <td class = 'table_titulo'><h3>Valor Total</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["itensvenda_codigo"]."</td>
          <td>".$row["ven_codigo"]."</td>
          <td>".$row["pro_codigo"]."</td>
          <td>".$row["tpp_codigo"]."</td>
          <td>".$row["nf_codigo"]."</td>
          <td>".$row["tpg_codigo"]."</td>
          <td>".$row["fun_codigo"]."</td>
		  <td>".$row["itv_embalagem"]."</td>
          <td>".$row["itv_qtde"]."</td>
          <td>".$row["itv_valorun"]."</td>
          <td>".$row["itv_desc"]."</td>
          <td>".$row["itv_valortotal"]."</td>

	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->