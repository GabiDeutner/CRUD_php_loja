<!-- Inicio Alterar -->
<center>
<form method="post" action="alterar_contareceber_backend.php">
<br> Codigo: <select size="1" name="cr_codigo">

<?php
// gera lista de conta receber // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_contareceber");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

<br> Valor.:<br>  
<input type="text" name="cr_valorconta">
<br> Data vencimento.:<br>  
<input type="text" name="cr_datavencimento">
<!-- AAAA-MM-DD -->
<br> Data recebimento.:<br>  
<input type="text" name="cr_datarecebimento">
<!-- AAAA-MM-DD -->

<br> Codigo Nota Fiscal: <select size="1" name="nf_codigo">

<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
<br> Observações.:<br>  
<input type="text" name="cr_observacoes">
<br><br>
<input type="submit" name="Submit" value="Alterar">
</form>
</center>