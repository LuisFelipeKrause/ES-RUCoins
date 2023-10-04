<?php
$id = $_POST['id'];
if(isset($_POST['enter'])){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $nome = $_POST['name'];
        if(isset($_POST['CPF']) && !empty($_POST['CPF'])){
            $cpf = $_POST['CPF'];
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = $_POST['email'];
                if(isset($_POST['optione']) && !empty($_POST['optione']) && strcmp($_POST['optione'], "Permissão")!=0){
                    $option = $_POST['optione'];
                    if(isset($_POST['numMat']) && !empty($_POST['numMat'])){
                        $numMat = $_POST['numMat'];
                    }else{
                        $numMat = null;
                    }
                    include_once '../model/Data.php';
                    if(Data::editUser($id, $nome, null, $cpf, $option, $email, $numMat)==true){
                        header("Location: http://localhost/PHP/ES-RUCOINS/view/AdmUser.php");
                        exit();
                    }
                }else{
                    echo "Selecione permissão do usuário";
                }
            }else{
                echo "email do usuário não informado";
            }
        }else{
            echo "CPF do usuário não informado";
        }
    }else{
        echo "Nome de usuário não informado";
    }
}
?>