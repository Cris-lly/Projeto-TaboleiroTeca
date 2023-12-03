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
        echo "Dados processados com sucesso!";
    } else {
        echo "Erro ao processar dados.";
    }
}
?>