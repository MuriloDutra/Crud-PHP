<?php
    function listaFornecedores($connection)
    {
        $query = "select * from FORNECEDORES";
        $fornecedores = array();
        $resultado = mysqli_query($connection, $query);

        while($fornecedor = mysqli_fetch_assoc($resultado))
        {
            array_push($fornecedores, $fornecedor);
        }

        return $fornecedores;
    }
?>