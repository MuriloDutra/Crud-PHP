<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/edita-fornecedor.css" rel="stylesheet">
    </head>
    <?php
        $id = $_POST['id'];
    ?>
    <body>
        <div id="cabecalho">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Lista de fornecedores</a></li>
            </ul>
        </div>
        <div>
            <form>
                <table class="table">
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
                        <td>
                            <select class="form-control" name="cidade">
                                <option></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>País</td>
                        <td><input class="form-control" type="text" name="pais"></td>
                    </tr>
                    <tr>
                        <td>Responsável de vendas</td>
                        <td><input class="form-control" type="text" name="responsavelVendas"></td>
                    </tr>
                    <tr>
                        <td>CNPJ/CPF</td>
                        <td><input class="form-control" type="text" name="cnpj_cpf"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>