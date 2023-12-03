<?
require_once '../models/game.php';
function buscar(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Chame a função do modelo para processar os dados
        $modelo = new Game();
        $resultado = $modelo->buscar();
    
        // Faça algo com o resultado, se necessário
        if ($resultado) {
            echo "Dados processados com sucesso!";
        } else {
            echo "Erro ao processar dados.";
        }
    }
}

?>