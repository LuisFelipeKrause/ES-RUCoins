<?php 
//Classe principal
require_once '../ES-RUCoins/vendor/autoload.php';
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;
$ctrl = new ControlPanel();

if(isset($_GET['enter'])){
    if($ctrl->VerificadorPI()==1){
        require_once "../ES-RUCoins/model/Data.php";
        $data = new Data();
        $string = $data->login($_GET['CPF'], $_GET['Pass']);
        if($string == -1){
            return -1;
        }
        $acesso = JWT::decode($string, new key("htsres", 'HS256'));
        $line = json_encode($acesso);
        $line = json_decode($line, true);
        if($line['perm'] == 1){
            echo "Gerente de TI logado";
        }else{
            if($line['perm'] == 2){
                echo "Administrador logado";
            }  else{
                if($line['perm'] == 3){
                    echo "Atendente logado";
                }else{
                    if($line['perm'] == 4){
                        echo "Cobrador logado";
                    }else{
                        if($line['perm'] == 5){
                            echo "Usuário logado";
                        }else{
                            echo "Cadastro não encontrado!";
                        }
                    }
                }
            }
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