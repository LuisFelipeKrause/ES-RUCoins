<?php 
//Classe principal
$ctrl = new ControlPanel();

if(isset($_GET['enter'])){
    if($ctrl->VerificadorPI()==1){
        echo("entrou");
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