<?php
    function listaFornecedores($connection)
    {
        $query = "select * from fornecedor";
        $fornecedores = array();
        $resultado = mysqli_query($connection, $query);

        while($fornecedor = mysqli_fetch_assoc($resultado))
        {
            array_push($fornecedores, $fornecedor);
        }

        return $fornecedores;
    }

    function buscaFornecedor($connection, $id)
    {
        $query = "select * from fornecedor where id = {$id}";
        $resultado = mysqli_query($connection, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>