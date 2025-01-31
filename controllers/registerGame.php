<!-- processar_formulario.php -->

<?php
// Inclua o modelo para ter acesso à função de processamento
require_once '../models/game.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $tel = $_POST['telefone'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $condicao = $_POST['condicao'];
    $preco = $_POST['preco'];
    $taxa = $_POST['taxa'];

    // Chame a função do modelo para processar os dados
    $modelo = new Game();
    $resultado = $modelo->cadastrarJogo($tel, $nome, $categoria, $condicao, $preco, $taxa);

    // Faça algo com o resultado, se necessário
    if ($resultado) {
        echo '<script type="text/javascript">
                    window.onload = function() {
                        alert("Cadastrado com sucesso!");
                        window.location.href = "./../views/pages/registerGame.php";
                    };
                    
                  </script>';
    } else {
        echo '<script type="text/javascript">
                    window.onload = function() {
                        alert("Erro ao cadastrar!");
                        window.location.href = "./../views/pages/registerGame.php";
                    };
                  </script>';
    }
}
?>