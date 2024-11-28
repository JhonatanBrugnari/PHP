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

    <title>Editar</title>
</head>

<body>
    <?php
    require_once"conexao.php";
    $id = $_GET["id"] ?? "";
    $sql =  "SELECT * FROM pessoas WHERE COD_PESSOA = $id";
    $result = mysqli_query($conect, $sql);
    $linha = mysqli_fetch_assoc($result)
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar</h1>
                <form action="editarDb.php" method="POST">
                    <div class="form">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['NOME']?>">
                    </div>
                    <div class="form">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['TELEFONE']?>">
                    </div>
                    <div class="form">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['ENDERECO']?>">
                    </div>
                    <div class="form">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $linha['EMAIL']?>">
                    </div>
                    <div class="form">
                        <label for="nascimento" class="form-label">Nome:</label>
                        <input type="date" class="form-control" name="dt_nasc" value="<?php echo $linha['DT_NASC']?>">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Salvar alterações">
                        <input type="hidden" name="id"value ="<?php echo $linha['COD_PESSOA']?>">
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