<?php 
//Classe que será utilizada para o envio de dados para o painel de controle
require_once "../ES-RUCoins/vendor/autoload.php";
use \Firebase\JWT\JWT;
require_once "../ES-RUCoins/model/Connection.php";
class Data{
    public function login($cpf, $pass){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename WHERE CPF = '$cpf' and senha = '$pass'";
        $result = mysqli_query($pdo, $query);

        if(empty($result) || mysqli_num_rows($result) != 1){
            echo "usuário não encontrado ou senha errada!";
            http_response_code(401);
            return -1;
        }

        $linha = mysqli_fetch_assoc($result);

        $payload = [
            "cpf" => $cpf,
            "perm" => $linha['permissao'],
        ];

        $encode = JWT::encode($payload, "htsres", 'HS256');

        return $encode;
    }
}
?>