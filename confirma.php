<?php
    include("fixos/cabecalho.php");
    $id = $_POST['id'];
    $nome = $_POST['nome'];
?>
    <p>O seguinte fornecedor, <?php echo $nome?>, será excluído. Você confirma essa ação?</p>
    
    <form class="formConfirma"action="deleta.php" method="get">
        <button name="btn-yes" class="btn btn-primary" value="sim">Sim</button>
        <button name="btn-no" class="btn btn-danger" value="nao">Não</button>
    </form>

<?php include("fixos/rodape.php");