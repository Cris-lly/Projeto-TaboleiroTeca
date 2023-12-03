<?php
class Conexao
{
    // Configurações de acesso
    private $servername; 
    private $username; 
    private $password;
    private $database;
    private $port;

    public function __construct() {
        $this->servername = "postgres";
        $this->database = "db_postgres_exemplo";
        $this->username = "postgres";
        $this->password = "senha_exemplar_postgres";
        $this->port = "5432";   
    }
    public function obterConexao()
    {
        try {
            $conexao = pg_connect("host=$this->servername dbname=$this->database user=$this->username password=$this->password");
            return $conexao;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
        
    }
    public function obterObjetoPDO(){
        try {
            $pdo = new PDO("pgsql:host=$this->servername; port=$this->port; dbname=$this->database; user=$this->username; password=$this->password", $this->username, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $pdo;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
