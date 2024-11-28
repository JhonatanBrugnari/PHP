<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        a {
            margin-top: 5px;
        }

        input {
            margin-top: 5px;
        }

        button {
            margin-top: 5px;
        }

        .container {
            margin-top: 24px;
        }
    </style>

    <title>Pesquisa</title>
</head>

<?php
require_once "conexao.php";
$pesquisa = $_POST["scbua"] ?? "";
$sql = "Select * From pessoas where nome like '%$pesquisa%'";
$dados = mysqli_query($conect, $sql);
// while ($linha = mysqli_fetch_assoc($dados)) {
//   foreach ($linha as $key => $value) {
//echo "". $key ."". $value ."";
//}}
?>

<div class="container">
    <div class="row">
        <div class="col">

            <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busca">
                <button class="btn btn-outline-success" type="submit">BUSCAR</button>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data de Nascimento</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require_once "editarDt.php";
                    while ($linha = mysqli_fetch_assoc($dados)) {
                        $COD_PESSOA = $linha["COD_PESSOA"];
                        $nome = $linha['NOME'];
                        $endereco = $linha['ENDERECO'];
                        $telefone = $linha['TELEFONE'];
                        $email = $linha['EMAIL'];
                        $dt_nasc = $linha['DT_NASC'];
                        $dt_nasc = Dt_Br($dt_nasc);

                        echo "<tr>
                        <th scope='row'>$nome</th>
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$dt_nasc</td>
                        <td>
                        <a href='excluir.php' class='btn btn-outline-danger' data-toggle='modal' data-target='#confirma' 
                          onclick = ".'"'."get_data( $COD_PESSOA, '$nome')".'"'.">
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                          <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
                          </svg>
                          Excluir
                          </a>
                          <a href='editar.php?id=$COD_PESSOA' class='btn btn-primary'>
                          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                          class='bi bi-pencil' viewBox='0 0 16 16'>
                          <path
                          d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325' />
                        </svg>
                        Editar
                    </a>
                    
                        </td>
                    </tr>";
                    }
                    ?>

                </tbody>
            </table>


            <a href="index.php" class=" btn btn-info">Voltar á pagina inicial</a>

        </div>
    </div>
</div>



<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="excluir.php" method ="POST">
                <p>Deseja Realmente excluir</p>
                <p id="nome_pessoa">Nome</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="cod_pessoa">
                <input type="hidden" name="nome" id="nomePessoa">
                <input type="submit" class="btn btn-danger" value="Sim">
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    function get_data(id, nome) {
        document.getElementById('nome_pessoa').innerHTML =nome
        document.getElementById('cod_pessoa').value =id
        document.getElementById('nomePessoa').value =nome

    }
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>