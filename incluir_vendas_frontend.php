<!--Início Incluir-->

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
<h1 class="titulos"> Incluir Venda </h1>
<center>
<form method="post" action="incluir_vendas_backend.php"><br>
<p>


Código Venda:
<input type="text" name="ven_codigo" ><br>
<br>



<br> Código Funcionário: <select size="1" name="fun_codigo">
<?php
// gera lista de funcionarios // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_funcionario");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod - $nome<option>\n";
}
?>
</select><br><br>




<br> Código Pagamento: <select size="1" name="tpg_codigo">
<?php
// gera lista de pagamentos // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipopagto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod - $nome<option>\n";
}
?>
</select><br><br>



Código Nota:<select size="1" name="nf_codigo">
<?php
// gera lista de nfs // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>


Data venda:
<input type="text" name="ven_datavenda"><br>
<br>

Valor total:
<input type="text" name="ven_valortotal"><br>
<br>

Observações:
<input type="text" name="ven_observacoes"><br>
<br>

<input type="submit" name="Submit" value="Incluir" class="botao">
</form>
</center>
<!--Fim Incluir-->