<!-- Inicio Excluir -->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Excluir Itens Venda </h1>
<center>
<form method="post" action="excluir_itensvenda_backend.php">
<br> Código Item Venda: <select size="1" name="itensvenda_codigo">
<?php
// gera lista de cidades // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_itensvenda");
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