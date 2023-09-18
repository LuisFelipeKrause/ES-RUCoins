<?php 
//Classe que será utilizada para o envio de dados para o painel de controle
require __DIR__ . '\vendor\autoload.php';
use \Firebase\JWT\JWT;
include("Connection");
class Data{
    public function login($cpf, $pass){
        $pdo = new Connection();
        $pdo = $pdo->Connect();

        $tablename = "";
        $prepare = $pdo->prepare("select * from".$tablename."where CPF = ".$cpf."and senha = ".$pass);

        $userFound = $prepare->fetch();

        if(!$userFound){
            echo "usuário não encontrado ou senha errada!";
            http_response_code(401);
        }
        if(!password_verify($pass, $userFound->password)){
            echo "Senha não foi inserida corretamente";
            http_response_code(401);
        }

        $payload = [
            "exp" == time()+10,
            "iat" == time(),
            "email" == $cpf,
        ];

        $encode = JWT::encode($payload, "maozinhaslegais", 'HS256');

        return $encode;
    }
}
?>