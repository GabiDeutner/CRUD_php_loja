<!--Início alterar-->
<html>
<head>
<title>Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>

<body>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>



<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Alterar Funcionário </h1>
<center>
<form method="post" action="alterar_funcionario_backend.php"><br>
<p>

Código do Funcionário:<select size="1" name="fun_codigo">
<?php
// gera lista funcionarios // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_funcionario");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod - $nome<option>\n";
}
?>
</select><br><br>

Nome:
<input type="text" name="fun_nome"><br>
<br>

Endereço:
<input type="text" name="fun_endereco"><br>
<br>

Número:
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

CNPJ ou CPF:
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

Salário:
<input type="text" name="fun_salario"><br>
<br>

<input type="submit" name="Submit" value="alterar" class="botao">
</form>
</center>
<!--Fim alterar-->