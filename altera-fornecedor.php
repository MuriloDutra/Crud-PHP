<?php include("cabecalho.php")?>
    <?php 
        include("database/banco-fornecedor.php");
        include("database/connectionDatabase.php");
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $responsavelVendas = $_POST['responsavelVendas'];
        $cnpj_cpf = $_POST['cnpj_cpf'];

        if(alteraFornecedor($connection, $id, $nome, $email, $telefone, $cep, $rua, $bairro, $municipio, $estado, $pais, $responsavelVendas, $cnpj_cpf)){?>
            <p class="text-success">Fornecedor <?= $nome?>, alterado com sucesso!</p>
        <?php 
        }else
        {
            $msg = mysqli_error($connection);?>
            <p class="text-danger">O fornecedor <?= $nome; ?> não foi alterado:<br> <?php echo $msg?></p>
        <?php
        }

    ?>
<?php include("rodape.php")?>