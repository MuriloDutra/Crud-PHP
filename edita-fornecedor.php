<?php include("database/banco-fornecedor.php");
    include("database/connectionDatabase.php");
    $id = $_POST['id'];
    $fornecedor = buscaFornecedor($connection, $id);
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/edita-fornecedor.css" rel="stylesheet">
    </head>
    <body>
        <div id="cabecalho">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Lista de fornecedores</a></li>
            </ul>
        </div>
        <div>
            <form action="altera-fornecedor" method="post">
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
                    <tr>
                        <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>