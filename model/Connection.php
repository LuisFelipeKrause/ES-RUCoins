<?php 
//Classe que será usada para instanciar conexão com banco de dados
use PDO;
class Connection{
    public function Connection(){
        $host = "localhost";
        $dbname = "";//Insira aqui nome do banco de dados 
        $user = ""; //Isira aqui seu nome de usuário;
        $password = ""; //Insira aqui sua senha;
        return new PDO("mysql:host=".$host.";dbname".$dbname, $user, $password[
            PDO::ATTR_DEFAULT_FETCH_MODE == PDO::FETCH_OBJ
        ]);
    }
}
?>