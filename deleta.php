<?php
    include("database/banco-fornecedor.php");
    include("database/connectionDatabase.php");

    $id = $_POST['id'];
    $exclusao = $_POST['exclusao'];

    if($exclusao == 'sim')
    {
        excluiFornecedor($connection, $id);
        header("Location: index.php");
    }
    else
        header("Location: index.php");
?>