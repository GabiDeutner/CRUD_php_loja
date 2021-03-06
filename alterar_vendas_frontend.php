<!--Início alterar-->
<center>
<form method="post" action="alterar_vendas_backend.php"><br>
<p>


Codigo: <select size="1" name="ven_codigo"">

<?php
// gera lista de vendas // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_vendas");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>


<br> Codigo funcionário: <select size="1" name="fun_codigo">
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




<br> Codigo pagamento: <select size="1" name="tpg_codigo">
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



Codigo Nota:<select size="1" name="nf_codigo">
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

<input type="submit" name="Submit" value="alterar">
</form>
</center>
<!--Fim alterar-->