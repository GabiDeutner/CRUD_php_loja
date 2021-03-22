<!--Início alterar-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<center>
<form method="post" action="alterar_compras_backend.php"><br>
<p>
Codigo:  <select size="1" name="com_codigo">

<?php
// gera lista de compras // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_compras");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>



<br> Codigo pagamento: <select size="1" name="tpg_codigo">

<?php
// gera lista de cidades // fazer a conexão
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

Codigo fornecedor:<select size="1" name="for_codigo">

<?php
// gera lista de cidades // fazer a conexão
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



Codigo Nota:<select size="1" name="nf_codigo">

<?php
// gera lista de cidades // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>


Data compra:
<input type="text" name="com_datacompra"><br>
<br>
Valor total:
<input type="text" name="com_valortotal"><br>
<br>
Observações:
<input type="text" name="com_observacoes"><br>
<br>
<input type="submit" name="Submit" value="alterar" class="botao">
</form>
</center>
<!--Fim alterar-->