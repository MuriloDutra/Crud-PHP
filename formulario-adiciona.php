<?php include("database/banco-fornecedor.php");
    include("database/connectionDatabase.php");
    include("fixos/cabecalho.php");
?>
    <div>
        <h1 class="titulo">Adicionar fornecedor</h1>
        <form action="adiciona-fornecedor.php" method="post">
            <table class="tabelaEdita table">
                <tr>
                    <td>Nome</td>
                    <td><input class="form-control" type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input class="form-control" type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td><input class="form-control" type="text" name="telefone"></td>
                </tr>
                <tr>
                    <td>CEP</td>
                    <td><input class="form-control" type="text" name="cep"></td>
                </tr>
                <tr>
                    <td>Rua</td>
                    <td><input class="form-control" type="text" name="rua"></td>
                </tr>
                <tr>
                    <td>Bairro</td>
                    <td><input class="form-control" type="text" name="bairro"></td>
                </tr>
                <tr>
                    <td>Município</td>
                    <td><input class="form-control" type="text" name="municipio"></td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><input class="form-control" type="text" name="estado"></td>
                </tr>
                <tr>
                    <td>País</td>
                    <td><input class="form-control" type="text" name="pais"></td>
                </tr>
                <tr>
                    <td>Responsável de vendas</td>
                    <td><input class="form-control" type="text" name="responsavelVendas">
                </td>
                </tr>
                <tr>
                    <td>CNPJ/CPF</td>
                    <td><input class="form-control" type="text" name="cnpj_cpf"></td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Adicionar produto"></td>
                </tr>
            </table>
        </form>
    </div>
<?php include("fixos/rodape.php");?>