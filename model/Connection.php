<?php 
//Classe que será usada para instanciar conexão com banco de dados
class Connection{
    public static function Connect(){
        $host = "localhost";
        $dbname = "loginRU";//Insira aqui nome do banco de dados 
        $user = "root"; //Isira aqui seu nome de usuário;
        $password = null; //Insira aqui sua senha;
        $conn = mysqli_connect($host, $user, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }else{
                return $conn;
            }
    }
}
?>