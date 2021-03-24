<!--Início Incluir-->
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