<!-- Inicio Excluir -->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<center>
<form method="post" action="excluir_contapagar_backend.php">
<br> Codigo: <select size="1" name="cp_codigo">
<?php
// gera lista de contapagar // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_contapagar");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

<input type="submit" name="Submit" value="Excluir" class="botao">
</form>
</center>
<!-- Fim Excluir -->