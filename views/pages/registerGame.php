<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locador</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <script src="../css/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css?2.3">
    <link rel="stylesheet" href="../css/lessor.css">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/image 2.png" alt="" width="30" height="24" class="d-inline-block align-text-top ms-2">
                TabuleiroTeca
            </a>
        </div>
    </nav>
    <div class="row  container-fluid container-user m-auto vh-100">

        <div class="col-2 px-0 d-flex align-items-center">
            <div class="bg-white border border-secondary rounded shadow-sm mt-5 w-100" style="height: 100%">

                <div class="d-flex justify-content-center ">

                    <img src="../images/UserCircle.svg" class="" srcset="">
                </div>
                <h5 class="text-center">Nome do usuário</h5>
                <div class="ps-2">
                    <ul class="list-unstyled ps-4">
                        <li><a href="../pages/lessor.php" class="link-dark text-decoration-none"><img src="../../views/images/home.svg" class="pb-1 pe-1" style="width: 20px" srcset=""> Início</a></li>
                        <li><a href="#" class="link-dark text-decoration-none"><img src="../../views/images/HeartStraight.svg" class="pb-1 pe-1" style="width: 18px" srcset="">Meus jogos</a></li>
                        <li><a href="../pages/registerGame.php" class="link-dark text-decoration-none"><img src="../../views/images/plus-circle.svg" class="pb-1 pe-1" style="width: 20px" srcset=""> Cadastrar jogos</a></li>
                        <li><a href="#" class="link-dark text-decoration-none"><img src="../../views/images/Gear.svg" class="pb-1 pe-1" style="width: 20px" srcset=""> Configuração</a></li>
                        <li><a href=".../../../../models/auth/logout.php" class="link-dark text-decoration-none"><img src="../../views/images/SignIn.svg" class="pb-1 pe-1" style="width: 20px" srcset=""> Sair</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-8 ps-2 d-flex align-items-center ">
            <div class="  mt-5 w-100 px-3" style="height: 100%">

                <div class="row pb-2" style="height: 17%;">
                    <div class="col-8 bg-blue h-100 border border-end-0 border-secondary rounded-start">
                        <p>
                        <h6>Disponibilize jogos para aluguel de forma descomplicada</h6>
                        Plataforma segura de aluguéis de jogos de tabuleiro você encontra aqui,
                        na TabuleiroTeca!</p>
                    </div>

                    <div class="col-4 bg-blue h-100 border border-start-0 border-secondary rounded-end">
                        <img src="../images/Frame 140.svg" class="float-end" alt="" srcset="" style="height:95%">
                    </div>
                </div>


                <div class="row bg-white border border-secondary rounded  shadow-sm" style="height: 83%;">

                    <div class="col border  rounded-start">

                        <h3 class="fs-5 text-center pt-2" style="color: #E86600;">Cadastre seu jogo aqui</h3>
                        <h4>Informações gerais</h4>
                        <form action="../../controllers/registerGame.php" method="post">

                            <div class="mb-1 mt-1">
                                <label for="nome" class="form-label">Nome do jogo</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="digite aqui" required>
                            </div>
                            <div class="mb-1">
                                <label for="inputPassword" class="form-label">Categoria</label>
                                <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                                    <option selected>Selecione uma opção</option>
                                    <option value="Antigos">Antigos</option>
                                    <option value="Economia">Economia</option>
                                    <option value="Educativos">Educativos</option>
                                    <option value="Estilo americano">Estilo americano</option>
                                    <option value="Estrategia">Estratégia</option>
                                    <option value="Eurogames">Eurogames</option>
                                    <option value="Fantasia">Fantasia</option>
                                    <option value="RPG">RPG</option>
                                </select>

                            </div>
                            <div class="mb-1">
                                <label for="inputPassword" class="form-label">Condições do jogo</label>
                                <select class="form-select" aria-label="Default select example" name="condicao" id="condicao">
                                    <option selected>Selecione uma opção</option>
                                    <option value="otimo">Ótimo</option>
                                    <option value="danificado">Danificado</option>
                                </select>

                            </div>
                            <div class="mb-1 mt-1">
                                <label for="telefone" class="form-label">Confirme seu telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00) 0000-0000" required>
                            </div>
                            <div class="mb-1">
                                <label for="senha" class="form-label">Preço do jogo</label>
                                <div>
                                    <input type="text" class="form-control" name="preco" id="preco" placeholder="digite aqui" required>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="senha" class="form-label">Informe o valor da multa em caso de danificação</label>
                                <div>
                                    <input type="text" class="form-control" name="taxa" id="taxa" placeholder="digite aqui" required>
                                </div>
                            </div>
                            <button class="mt-3 btn btn-danger text-dark w-100 " type="submit">Cadastrar</button>

                        </form>
                    </div>
                    <div class="col bg-danger rounded-end d-flex justify-content-center">
                        <div class="d-flex align-items-center">

                            <img src="../images/image 5.svg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-2 px-0 d-flex align-items-center ">
            <div class=" mt-5 w-100 px-2" style="height: 100%">
                <div class="row pb-1" style="height:20%">
                    <div class="p-2 feedback border shadow-generic border-end-0 border-secondary rounded">

                        <div class="row">
                            <div class="col">Total: 3</div>
                            <div class="col">Bom: 2 </div>
                            <div class="col">Ruim:1</div>
                        </div>
                        <figure>
                            <blockquote class="blockquote">
                                <p class="fs-6">Nº de feedbacks recebidos</p>
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