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

    function alteraFornecedor($connection, $id, $nome, $email, $telefone, $cep, $rua, $bairro, $municipio, $estado, $pais, 
    $responsavelVendas, $cnpj_cpf)
    {
        $query = "update FORNECEDOR set nome={$nome}, email={$email}, telefone={$telefone}, CEP={$cep}, rua={$rua}, bairro={$bairro},
        municipio={$municipio}, estado={$estado}, pais={$pais}, responsavelVendas={$responsavelVendas}, CNPJ_CPF={$cnpj_cpf}";

        return mysqli_query($connection, $query);
    }
?>