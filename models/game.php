<?php
require_once '../models/BD/connect.php';
class Game
{
    private $conexao;
    private $conn;
    private $pdo;


    public function __construct()
    {
        $this->conexao = new Conexao();
        $this->conn = $this->conexao->obterConexao();
        $this->pdo = $this->conexao->obterObjetoPDO();
    }

    function cadastrarJogo($tel, $nome, $categoria, $condicao, $preco, $taxa)
    {
        $sql_lessor = "select * from locador where telefone='" . $tel . "'";
        $res_lessor = pg_query($this->conn, $sql_lessor);
        $record_lessor = pg_num_rows($res_lessor);
        if ($record_lessor == 1) {
            $row = pg_fetch_row($res_lessor);
            $id_locador = $row[0];
            print_r($id_locador);
            try {
                $sql = "INSERT INTO jogo (id_locador, nome, categoria, condicao, valor, taxa)
                VALUES (:id_locador, :nome, :categoria, :condicao, :preco, :taxa)";
                //preparar o sql (PDO)
                $stmt = $this->pdo->prepare($sql);

                //definir os dados
                $dados = array(
                    ':id_locador' => $id_locador,
                    ':nome' => $nome,
                    ':categoria' => $categoria,
                    ':condicao' => $condicao,
                    ':preco' => $preco,
                    ':taxa' => $taxa
                );

                //tentar inserir
                if ($stmt->execute($dados)) {
                    echo ("<script>alert('Cadastrado com sucesso!')</script>");
                    header('Location: ./../views/pages/registerGame.php ');
                }
            } catch (\Exception $e) {
                print_r("<script>alert('Erro ao se cadastrar!')</script>");
            }
        }
    }
    function buscar()
    {
        $sql = "SELECT * FROM jogo";
        $resultado = pg_query($this->conn, $sql);

        if (!$resultado) {
            die("Erro na consulta ao banco de dados");
        }

        $dados = array();
        while ($linha = pg_fetch_assoc($resultado)) {
            $dados[] = $linha;
        }

        return $dados;
    }
}
