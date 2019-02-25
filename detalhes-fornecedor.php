<?php include("database/banco-fornecedor.php");
    include("database/connectionDatabase.php");
    include("cabecalho.php");
    $id = $_POST['id'];
    $fornecedor = buscaFornecedor($connection, $id);
?>
    <div>
        <h1 class="titulo">Detalhes do fornecedor</h1>
        <form>
            <table class="table">
                <tr>
                    <td>Nome</td>
                    <td><input class="form-control" type="text" name="nome" value="<?=$fornecedor['nome']?>"></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input class="form-control" type="text" name="email" value="<?=$fornecedor['email']?>"></td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td><input class="form-control" type="text" name="telefone" value="<?=$fornecedor['telefone']?>"></td>
                </tr>
                <tr>
                    <td>CEP</td>
                    <td><input class="form-control" type="text" name="cep" value="<?=$fornecedor['CEP']?>"></td>
                </tr>
                <tr>
                    <td>Rua</td>
                    <td><input class="form-control" type="text" name="rua" value="<?=$fornecedor['rua']?>"></td>
                </tr>
                <tr>
                    <td>Bairro</td>
                    <td><input class="form-control" type="text" name="bairro" value="<?=$fornecedor['bairro']?>"></td>
                </tr>
                <tr>
                    <td>Município</td>
                    <td><input class="form-control" type="text" name="municipio" value="<?=$fornecedor['municipio']?>"></td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><input class="form-control" type="text" name="estado" value="<?=$fornecedor['estado']?>"></td>
                </tr>
                <tr>
                    <td>País</td>
                    <td><input class="form-control" type="text" name="pais" value="<?=$fornecedor['pais']?>"></td>
                </tr>
                <tr>
                    <td>Responsável de vendas</td>
                    <td><input class="form-control" type="text" name="responsavelVendas" value="<?=$fornecedor['responsavelVendas']?>">
                </td>
                </tr>
                <tr>
                    <td>CNPJ/CPF</td>
                    <td><input class="form-control" type="text" name="cnpj_cpf" value="<?=$fornecedor['CNPJ_CPF']?>"></td>
                </tr>
            </table>
        </form>
    </div>
<?php include("rodape.php");?>