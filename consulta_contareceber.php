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
<h1 class="titulos"> Contas a Receber </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_contareceber", $db);
echo "<center><table border='1'>
<tr>
	<td class = 'table_titulo'><h3>Código Conta Receber</h3></td>
	<td class = 'table_titulo'><h3>Valor Conta</h3></td>
	<td class = 'table_titulo'><h3>Data Vencimento</h3></td>
	<td class = 'table_titulo'><h3>Data Recebimento</h3></td>
    <td class = 'table_titulo'><h3>Código Nota Fiscal</h3></td>
    <td class = 'table_titulo'><h3>Observações</h3></td>
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