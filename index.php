<?php include("database/banco-fornecedor.php");
    include("database/connectionDatabase.php");    
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/index.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <h1>Bem vindo ao teste de CRUD!</h1>
        <form id="btnAdiciona" action="formulario-adiciona.php" method="post">
            <button class="btn btn-primary">Adicionar novo fornecedor</button>
        </form>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Detalhes</th>
                <th>Deletar</th>
            </thead>
            <tbody>
                <?php
                    $fornecedores = listaFornecedores($connection);                 
                    foreach($fornecedores as $fornecedor):?>
                    <tr>
                        <td><?=$fornecedor['nome']?></td>
                        <td><?=$fornecedor['email']?></td>
                        <td>
                            <form action="formulario-edita.php" method="post">
                                <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
                                <button><i class="material-icons">settings</i></button>
                            </form>
                        </td>
                        <td>
                            <form action="formulario-detalhes.php" method="post">
                                <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
                                <button><i class="material-icons">info</i></button>
                            </form>
                        </td>
                        <td>
                            <form action="confirma.php" method="post">
                                <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
                                <input type="hidden" name="nome" value="<?=$fornecedor['nome']?>">
                                <button><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach?>
            </tbody>
        <table>
    </body>
</html>