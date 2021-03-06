<!--Início alterar-->
<center>
<form method="post" action="alterar_tipopagto_backend.php"><br>
<p>

Codigo: <select size="1" name="tpg_codigo">

<?php
// gera lista de tipo pagamento // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipopagto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

Descrição:
<input type="text" name="tpg_descricao"><br>
<br>

Quantidade:
<input type="text" name="tpg_qtde"><br>
<br>

Ativo:
<input type="text" name="tpg_ativo"><br>
<br>

<input type="submit" name="Submit" value="alterar">
</form>
</center>
<!--Fim alterar-->