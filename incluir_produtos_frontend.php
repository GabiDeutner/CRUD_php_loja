<!--Início Incluir-->
<center>
<form method="post" action="incluir_produtos_backend.php"><br>
<p>

Codigo:
<input type="text" name="pro_codigo" ><br>
<br>

Descrição:
<input type="text" name="pro_descricao"><br>
<br>

<br> Codigo tipo de produto: <select size="1" name="tpp_codigo">
<?php
// gera lista dos tipos de produto // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipoproduto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$desc=$registro[1];
echo "<option value=\"$cod\">$cod - $desc<option>\n";
}
?>
</select><br><br>

Preço de custo:
<input type="text" name="pro_precocusto"><br>
<br>

Preço de venda:
<input type="text" name="pro_precovenda"><br>
<br>

Estoque:
<input type="text" name="pro_estoque"><br>
<br>

Embalagem:
<input type="text" name="pro_embalagem"><br>
<br>

IPI:
<input type="text" name="pro_ipi"><br>
<br>

<input type="submit" name="Submit" value="Incluir">
</form>
</center>
<!--Fim Incluir-->