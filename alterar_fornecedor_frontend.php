<!--Início alterar-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<center>
<form method="post" action="alterar_fornecedor_backend.php"><br>
<p>

Código: <select size="1" name="for_codigo">

<?php
// gera lista de fornecedor // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

Nome:
    <input type="text" name="for_nome" ><br>
    <br>

Endereço:
    <input type="text" name="for_endereco" ><br>
    <br>

Número:
    <input type="text" name="for_numero" ><br>
    <br>

Bairro:
    <input type="text" name="for_bairro" ><br>
    <br>

Cidade:
    <input type="text" name="for_cidade" ><br>
    <br>

UF:
    <input type="text" name="for_uf" ><br>
    <br>

CNPJCPF:
    <input type="text" name="for_cnpjcpf" ><br>
    <br>

RG:
    <input type="text" name="for_rgie" ><br>
    <br>

Telefone:
    <input type="text" name="for_telefone" ><br>
    <br>

Fax:
    <input type="text" name="for_fax" ><br>
    <br>

Celular:
    <input type="text" name="for_celular" ><br>
    <br>

E-mail:
    <input type="text" name="for_email" ><br>
    <br>

<input type="submit" name="Submit" value="alterar">
</form>
</center>
<!--Fim alterar-->