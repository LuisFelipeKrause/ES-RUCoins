<?php 
//Classe principal
require __DIR__ . '\vendor\autoload.php';
use \Firebase\JWT\JWT;
include("../model/Data.php");
$ctrl = new ControlPanel();

if(isset($_GET['enter'])){
    if($ctrl->VerificadorPI()==1){
        $data = new Data();
        $string = $data->login($_GET['CPF'], $_GET['Pass']);
        $acesso = JWT::decode($string, "maozinhaslegais");
        if($acesso){
            header();
        }
    }
}else{
    if(isset($_GET['forgotPass'])){
        echo "Página de esqueceu a senha";
    }
}

class ControlPanel{
    public function VerificadorPI(){
        if(isset($_GET['CPF']) && !empty($_GET['CPF'])){
           if(isset($_GET['Pass']) && !empty($_GET['Pass'])){
                return 1;
           }else{
                echo("Senha vazia!");
                return 0;
           }
        }else{
            echo("CPF não inserido!");
            return 0;
        }
    }

    public function InstanciaPaginaInicial(){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost/PHP/ES-RUCOINS/view/PaginaInicial.html");
        curl_exec($curl);
        curl_close($curl);
    }

    

}
?>