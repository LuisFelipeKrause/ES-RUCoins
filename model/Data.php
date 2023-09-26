<?php 
//Classe que será utilizada para o envio de dados para o painel de controle
require_once "../vendor/autoload.php";
use \Firebase\JWT\JWT;
require_once "../model/Connection.php";
class Data{
    public function login($cpf, $pass){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename WHERE CPF = '$cpf' and senha = '$pass'";
        $result = mysqli_query($pdo, $query);

        if(empty($result) || mysqli_num_rows($result) != 1){
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

    public function table($cpf){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT nome, email, legendas_permissao.permissao FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id and usuarios.cpf = '$cpf';";
        $result = mysqli_query($pdo, $query);

        return $result;
    }

    public function tableC(){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "usuarios";

        $query = "SELECT * FROM $tablename inner join legendas_permissao where usuarios.permissao = legendas_permissao_id";
        $result = mysqli_query($pdo, $query);

        return $result;
    }
}
?>