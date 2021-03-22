<!--Início Incluir-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<center>
<form method="post" action="incluir_contapagar_backend.php"><br>
    <p>

Codigo:
    <input type="text" name="cp_codigo" ><br>
    <br> 

Valor Conta:
    <input type="text" name="cp_valorconta"><br>
    <br>

Data de Vencimento:
    <input type="text" name="cp_datavencimento"><br>
    <br>

Data de Pagamento:
    <input type="text" name="cp_datapagamento"><br>
    <br>

Codigo Nota Fiscal:
<select size="1" name="nf_codigo">

<?php
    // gera lista de notas fiscais // fazer a conexão
    include "conexao.php";
    $res = mysql_query ("select * from tb_notafiscal");
    while ($registro = mysql_fetch_row ($res))
        {
            $cod=$registro[0];
            echo "<option value=\"$cod\">$cod<option>\n";
        }
?>
</select><br><br>



Observações:
<input type="text" name="cp_observacoes"><br>
<br>
<input type="submit" name="Submit" value="Incluir" class="botao">
</form>
</center>
<!--Fim Incluir-->