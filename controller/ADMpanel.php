<?php 
//Classe principal
include_once '../vendor/autoload.php';
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;
if(isset($_POST['Search'])){
    include_once '../model/Data.php';
    $data = new Data();
    return $data->table($_POST['CPF']);
}else{
    if(isset($_POST['Register'])){
        header("Location: http://localhost/PHP/ES-RUCOINS/view/CadstroUsuario.html");
    }
}

?>