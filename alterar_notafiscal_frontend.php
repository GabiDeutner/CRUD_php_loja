<!--Início Alterar-->
<center>
<form method="post" action="alterar_notafiscal_backend.php"><br>
<p>

Codigo: <select size="1" name="cr_codigo">

<?php
// gera lista de nota fiscal// fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>


Valor:
<input type="text" name="nf_valornf"><br>
<br>

Taxa imposto:
<input type="text" name="nf_taxaimpostonf"><br>
<br>

Valor imposto:
<input type="text" name="nf_valorimposto"><br>
<br>

<input type="submit" name="Submit" value="alterar">
</form>
</center>
<!--Fim alterar-->