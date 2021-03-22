<!-- Inicio Excluir -->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Excluir Compra </h1>
<center>
<form method="post" action="excluir_compras_backend.php">
<br> Codigo: <select size="1" name="com_codigo">
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

<input type="submit" name="Submit" value="Excluir" class="botao">
</form>
</center>
<!-- Fim Excluir -->
