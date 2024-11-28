<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        a{
            margin-top: 5px;
        }
        input{
            margin-top: 5px;
        }
    </style>

    <title>Cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="registroDb.php" method="POST">
                    <div class="form">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>
                    <div class="form">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                    <div class="form">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form">
                        <label for="nascimento" class="form-label">Nome:</label>
                        <input type="date" class="form-control" name="dt_nasc">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
                <a href="index.php" class=" btn btn-info">Voltar á pagina inicial</a>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>