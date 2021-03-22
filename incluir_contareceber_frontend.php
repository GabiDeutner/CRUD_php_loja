<!--Início Incluir-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<h1 class="titulos"> Incluir Conta a Receber </h1>
<center>
<form method="post" action="incluir_contareceber_backend.php"><br>
    <p>

Codigo:
    <input type="text" name="cr_codigo"><br>
    <br>

Valor Conta:
    <input type="text" name="cr_valorconta"><br>
    <br>

Data de vencimento:
    <input type="text" name="cr_datavencimento"><br>
    <br>

Data de recebimento:
    <input type="text" name="cr_datarecebimento"><br>
    <br>

Codigo Nota Fiscal:
    <select size="1" name="nf_codigo">
    <?php
        // gera lista de notas fiscais// fazer a conexão
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
    <input type="text" name="cr_observacoes"><br>
    <br>
    <input type="submit" name="Submit" value="Incluir" class="botao">
</form>
</center>
<!--Fim Incluir-->