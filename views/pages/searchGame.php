<?php
require '../../models/BD/connect.php';
$conexao = new Conexao();
$conn = $conexao->obterConexao();
$sql = "SELECT * FROM jogo";
$resultado = pg_query($conn, $sql);

if (!$resultado) {
    die("Erro na consulta ao banco de dados");
}

$dados = array();
while ($linha = pg_fetch_assoc($resultado)) {
    $dados[] = $linha;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locatário</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <script src="../css/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css?2.4">
    <link rel="stylesheet" href="../css/lesse.css?1">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/image 2.png" alt="" width="30" height="24" class="d-inline-block align-text-top ms-2">
                TabuleiroTeca
            </a>
        </div>
    </nav>
    <div class="row  container-fluid container-user m-auto vh-100">

        <div class="col-2  d-flex align-items-center px-0">

            <div class="bg-white border border-secondary rounded shadow-sm mt-5 w-100" style="height: 82%">

                <div class="d-flex justify-content-center ">

                    <img src="../images/UserCircle.svg" class="" srcset="">
                </div>
                <h5 class="text-center">Nome do usuário</h5>
                <div class="ps-2">
                    <ul>
                        <li><a href="#" class="link-secondary">Início</a></li>
                        <li><a href="#" class="link-secondary">Meus aluguéis</a></li>
                        <li><a href="#" class="link-secondary">Pesquisar jogos</a></li>
                        <li><a href="#" class="link-secondary">Configuração</a></li>
                        <li><a href="#" class="link-secondary">Sair</a></li>
                    </ul>

                </div>

            </div>
        </div>

        <div class="col-8  d-flex align-items-center ps-2">
            <div class="  mt-5 w-100 px-3" style="height: 82%">

                <div class="row h-25 pb-2">
                    <div class="col-8 bg-blue h-100 border border-end-0 border-secondary rounded-start" >
                        <p>
                        <h6>Se divirta jogando nossos jogos de Tabuleiro com seus amigos!</h6>
                        Aluguéis de jogos de tabuleiro acessíveis você encontra aqui, na TabuleiroTeca!</p>
                    </div>

                    <div class="col-4 bg-blue h-100 border border-start-0 border-secondary rounded-end">
                        <img src="../images/Frame 140.png" class="float-end" alt="" srcset="" style="height:95%">
                    </div>
                </div>


                <div class="row h-75 bg-white border border-secondary rounded  shadow-sm">
                    <div style="height: 500px;">
                    <div class="h-75" style="overflow: auto;"><?php
                    echo '<pre>';
                    print_r($dados);
                    echo '</pre>';
                    ?></div>
                    

                    </div>

                </div>
            </div>
        </div>

        <div class="col-2  d-flex align-items-center px-0">
            <div class=" mt-5 w-100 px-2" style="height: 82%">
                <div class="row pb-3" style="height:20%">
                    <div class="pt-1 feedback border shadow-generic border-end-0 border-secondary rounded">

                        <p class="">0</p>
                        <figure>
                            <blockquote class="blockquote">
                                <p class="fs-6">Número de feedbacks dados</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                nos últimos dias
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="mt-2 row bg-white border border-secondary rounded  shadow-sm" style="height:78.6%">
                    <div class="pt-3">
                        <div class="row">
                            <div class="col">
                                <h4 class="fs-6">Notificações</h4>

                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-warning">Ver todas</button>
                            </div>
                        </div>
                        <p>1 nova notificação</p>
                        <div class="p-2 border border-secondary rounded bg-primary">
                            <p>Atraso na devolução</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>