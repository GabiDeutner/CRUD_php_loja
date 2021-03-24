<!--Início alterar-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Alterar Itens Venda </h1>
<center>
<form method="post" action="alterar_itensvenda_backend.php"><br>
<p>

Código Item Venda: <select size="1" name="itensvenda_codigo">

<?php
// gera lista de itens venda // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_itensvenda");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>



<br> Código de Venda: <select size="1" name="ven_codigo">
<?php
// gera lista de vendas // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_vendas");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$dvaltot=$registro[5];
echo "<option value=\"$cod\">$cod - $valtot<option>\n";
}
?>
</select><br><br>

<br> Código Produto: <select size="1" name="pro_codigo">
<?php
// gera lista de produto // fazer a conexão
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
// gera lista dos tipos de produtos // fazer a conexão
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

<br> Código Nota fiscal: <select size="1" name="nf_codigo">
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

<br> Código Tipo de Pagamento: <select size="1" name="tpg_codigo">
<?php
// gera lista de tipos de pagamento // fazer a conexão
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

<br> Código do Funcionário: <select size="1" name="fun_codigo">
<?php
// gera lista deos funcionarios // fazer a conexão
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



Embalagem:
<input type="text" name="itv_embalagem"><br>
<br>

Quantidade:
<input type="text" name="itv_qtde"><br>
<br>

Valor Unidade:
<input type="text" name="itv_valorun"><br>
<br>

Desconto:
<input type="text" name="itv_desc"><br>
<br>

Valor total:
<input type="text" name="itv_valortotal"><br>
<br>

<input type="submit" name="Submit" value="alterar" class="botao">
</form>
</center>
<!--Fim alterar-->