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
<h1 class="titulos">Fornecedores </h1>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_fornecedor", $db);
echo "<center><table border='1'>
<tr>
	  <td class = 'table_titulo'><h3>Código Fornecedor</h3></td>
	  <td class = 'table_titulo'><h3>Nome</h3></td>
	  <td class = 'table_titulo'><h3>Endereço</h3></td>
	  <td class = 'table_titulo'><h3>Número</h3></td>
    <td class = 'table_titulo'><h3>Bairro</h3></td>
    <td class = 'table_titulo'><h3>Cidade</h3></td>
    <td class = 'table_titulo'><h3>UF</h3></td>
    <td class = 'table_titulo'><h3>CNPJCPF</h3></td>
    <td class = 'table_titulo'><h3>RGIE</h3></td>
    <td class = 'table_titulo'><h3>Telefone</h3></td>
    <td class = 'table_titulo'><h3>Fax</h3></td>
    <td class = 'table_titulo'><h3>Celular</h3></td>
    <td class = 'table_titulo'><h3>E-mail</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["for_codigo"]."</td>
          <td>".$row["for_nome"]."</td>
		  <td>".$row["for_endereco"]."</td>
		  <td>".$row["for_numero"]."</td>
          <td>".$row["for_bairro"]."</td>
          <td>".$row["for_cidade"]."</td>
          <td>".$row["for_uf"]."</td>
          <td>".$row["for_cnpjcpf"]."</td>
          <td>".$row["for_rgie"]."</td>
          <td>".$row["for_telefone"]."</td>
          <td>".$row["for_fax"]."</td>
          <td>".$row["for_celular"]."</td>
          <td>".$row["for_email"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->