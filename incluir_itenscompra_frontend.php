<!--Início Incluir-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Incluir Itens Compra </h1>
<center>
<form method="post" action="incluir_itenscompra_backend.php"><br>
<p>

Código Item Compra:
<input type="text" name="itenscompra_codigo" ><br>
<br>

<br> Código Compra: <select size="1" name="com_codigo">
<?php
// gera lista de codigo de compra // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_compras");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$valtot=$registro[5];
echo "<option value=\"$cod\">$cod - $valtot<option>\n";
}
?>
</select><br><br>

<br> Código Produto: <select size="1" name="pro_codigo">
<?php
// gera lista deos produtos // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_produtos");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod - $nome<option>\n";
}
?>
</select><br><br>

<br> Código do Tipo de Produto: <select size="1" name="tpp_codigo">
<?php
// gera lista de tipos de produtos // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipoproduto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$desc=$registro[1];
echo "<option value=\"$cod\">$cod - $desc<option>\n";
}
?>
</select><br><br>

<br> Código Nota Fiscal: <select size="1" name="nf_codigo">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$valor=$registro[1];
echo "<option value=\"$cod\">$cod - $valor<option>\n";
}
?>
</select><br><br>

<br> Código do Fornecedor: <select size="1" name="for_codigo">
<?php
// gera lista de fornecedores // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod - $nome<option>\n";
}
?>
</select><br><br>

<br> Código Tipo de Pagamento: <select size="1" name="tpg_codigo">
<?php
// gera lista de tipo de pagamento // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipopagto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$desc=$registro[1];
echo "<option value=\"$cod\">$cod - $desc<option>\n";
}
?>
</select><br><br>

Embalagem:
<input type="text" name="itc_embalagem"><br>
<br>

Quantidade:
<input type="text" name="itc_qtde"><br>
<br>

Valor Unidade:
<input type="text" name="itc_valorun"><br>
<br>

Desconto:
<input type="text" name="itc_desc"><br>
<br>

Valor Total:
<input type="text" name="itc_valortotal"><br>
<br>

<input type="submit" name="Submit" value="Incluir" class="botao">
</form>
</center>
<!--Fim Incluir-->