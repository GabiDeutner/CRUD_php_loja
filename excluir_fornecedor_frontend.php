<!-- Inicio Excluir -->
<center>
<form method="post" action="excluir_fornecedor_backend.php">
<br> Codigo: <select size="1" name="for_codigo">
<?php
// gera lista de fornecedores // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

<input type="submit" name="Submit" value="Excluir">
</form>
</center>
<!-- Fim Excluir -->