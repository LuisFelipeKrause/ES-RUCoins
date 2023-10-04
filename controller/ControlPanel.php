<?php 
//Classe principal
include_once '../vendor/autoload.php';
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;
$ctrl = new ControlPanel();
if(isset($_POST['enter'])){
    if($ctrl->VerificadorPI()==1){
        include_once "../model/Data.php";
        $data = new Data();
        $string = $data->login($_POST['CPF'], $_POST['Pass']);
        if($string == -1){
            header("Location: ../view/PaginaInicial.html");
            echo "usuário não encontrado ou senha errada!";
            return -1;
        }
        $acesso = JWT::decode($string, new key("htsres", 'HS256'));
        $line = json_encode($acesso);
        $line = json_decode($line, true);
        if($line['perm'] <= 2){
            header("Location: ../view/AdmUser.php");
        }else{
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
}else{
    if(isset($_POST['forgotPass'])){
        echo "Página de esqueceu a senha";
    }
}

class ControlPanel{
    public function VerificadorPI(){
        if(isset($_POST['CPF']) && !empty($_POST['CPF'])){
           if(isset($_POST['Pass']) && !empty($_POST['Pass'])){
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
}
?>