<?php
require '../../models/BD/connect.php';
$conexao = new Conexao();
$conn = $conexao->obterConexao();
$sql = "SELECT jogo.nome , jogo.valor , jogo.categoria, locador.telefone
        FROM jogo
        INNER JOIN locador  ON jogo.id_locador = locador.id;";
$resultado = pg_query($conn, $sql);

if (!$resultado) {
    die("Erro na consulta ao banco de dados");
}

$dados = array();
while ($linha = pg_fetch_assoc($resultado)) {
    $dados[] = $linha;
}
?>