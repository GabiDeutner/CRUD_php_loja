<!--Início alterar-->
<center>
<form method="post" action="alterar_funcionario_backend.php"><br>
<p>

Codigo: <select size="1" name="fun_codigo">

<?php
// gera lista de funcionario // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_funcionario");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

Nome:
<input type="text" name="fun_nome"><br>
<br>

Endereço:
<input type="text" name="fun_endereco"><br>
<br>

Numero:
<input type="text" name="fun_numero"><br>
<br>

Complemento:
<input type="text" name="fun_complemento"><br>
<br>

Bairro:
<input type="text" name="fun_bairro"><br>
<br>

Cidade:
<input type="text" name="fun_cidade"><br>
<br>

UF:
<input type="text" name="fun_uf"><br>
<br>

CNPJ / CPF:
<input type="text" name="fun_cnpjcpf"><br>
<br>

RG:
<input type="text" name="fun_rgie"><br>
<br>

Sexo:
<input type="text" name="fun_sexo"><br>
<br>

Nascimento:
<input type="text" name="fun_nascimento"><br>
<br>

Telefone:
<input type="text" name="fun_telefone"><br>
<br>

Celular:
<input type="text" name="fun_celular"><br>
<br>

E-mail:
<input type="text" name="fun_email"><br>
<br>

Salario:
<input type="text" name="fun_salario"><br>
<br>

<input type="submit" name="Submit" value="alterar">
</form>
</center>
<!--Fim alterar-->