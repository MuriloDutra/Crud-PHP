<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/cabecalho.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <h1 class="center">Bem vindo ao teste de CRUD!</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Detalhes</th>
                <th>Deletar</th>
            </thead>
            <tbody>
                <tr>
                    <td>Murilo Dutra</td>
                    <td>murilo.dutra2000@gmail.com</td>
                    <td>
                        <form action="edita-fornecedor.php">
                            <button><i class="material-icons">settings</i></button>
                        </form>
                    </td>
                    <td>
                        <form action="detalhes-fornecedor.php">
                            <button><i class="material-icons">info</i></button>
                        </form>
                    </td>
                    <td>
                        <button><i class="material-icons">delete</i></button>
                    </td>
                </tr>
            </tbody>
        <table>
    </body>
    <!--<button type="submit" formaction="/action_page2.php">Submit to another page</button>-->
</html>