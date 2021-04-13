<!--Início alterar-->
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
<h1 class="titulos"> Alterar Contas a Pagar </h1>
<center>
<form method="post" action="alterar_contapagar_backend.php"><br>
    <p>

Código Conta a Pagar: <select size="1" name="cp_codigo">

<?php
// gera lista de conta pagar // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_contapagar");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>



Valor Conta:
    <input type="text" name="cp_valorconta"><br>
    <br>

Data de Vencimento:
    <input type="text" name="cp_datavencimento"><br>
    <br>

Data de Pagamento:
    <input type="text" name="cp_datapagamento"><br>
    <br>

Código Nota Fiscal:
<select size="1" name="nf_codigo">

<?php
    // gera lista de notas fiscais // fazer a conexão
    include "conexao.php";
    $res = mysql_query ("select * from tb_notafiscal");
    while ($registro = mysql_fetch_row ($res))
        {
            $cod=$registro[0];
            echo "<option value=\"$cod\">$cod<option>\n";
        }
?>
</select><br><br>



Observações:
<input type="text" name="cp_observacoes"><br>
<br>
<input type="submit" name="Submit" value="alterar" class="botao">
</form>
</center>
<!--Fim alterar-->