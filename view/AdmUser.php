<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/PHP/ES-RUCoins/view/css/style.css">
    <title>RU-COINS</title>
</head>

<body>
    <div class="main">
        <section>
            <div class="head-itens">
                <img src="http://localhost/PHP/ES-RUCoins/view/img/brasao_uft.webp" alt="">
                <a href="#"><i class="fa-solid fa-circle-user"></i></a>
            </div>
        </section>

        <section>
            <div class="search-itens">
                <form class="search-form" method="post" action="">
                    <div class="mb-3 search-input">
                        <label for="" class="form-label">Buscar</label>
                        <input type="text" name="CPF" class="form-control" id="" aria-describedby="">
                    </div>

                    <div class="search-btn">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" name="Search">Buscar</button>
                            <button type="submit" class="btn btn-primary btn-lg" id="btn-register" name="Register">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="table-content">
                <table>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th class="table-icon-width">Permissão</th>
                    </tr>
                    <?php
                    include_once '../controller/teste.php';
                    include_once '../model/Data.php';
                        if(isset($_POST['Search']) && isset($_POST['CPF']) && !empty($_POST['CPF'])){
                            $data = new Data();
                            $list = $data->table($_POST['CPF']);
                            resultados($list);
                        }else{
                            if(isset($_POST['Register'])){
                                header("Location: http://localhost/PHP/ES-RUCOINS/view/CadstroUsuario.html");
                            }else{
                                $data = new Data();
                                $result = $data->tableC();
                                resultados($result);
                            }
                        }
                        function resultados($data){
                            $i = 1;
                            while($res = mysqli_fetch_assoc($data)){
                                echo "<tr>
                                    <th>".$i."</th>
                                    <td>".$res['nome']."</td>
                                    <td>".$res['email']."</td>
                                    <td class='table-icon-width'>".$res['permissao']."
                                    <button type='button'  class='btn btn-block btn-primary' onclick='exibe(".json_encode($res).")'><i id='icon-plus' class='fa-solid fa-plus'></i></button>
                                    <a href='./EditUser.php?id='".$res['usuario_id']."><i id='icon-pencil' class='fa-regular fa-pen-to-square'></i></a>
                                    <button type='submit' name='lix' onclick='apaga(".$res['usuario_id'].")'><i id='icon-trash' class=' fa-solid fa-trash'></i></button>
                                    </td>
                                </tr>";
                                $i = $i + 1;
                            }
                        }
                    ?>
                </table>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-itens">
            <img src="http://localhost/PHP/ES-RUCoins/view/img/brasao_uft.webp" alt="">
            <img src="http://localhost/PHP/ES-RUCoins/view/img/logocurso.png" alt="">
        </div>
        Engenharia de software 2023/2
    </footer>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    function exibe(objeto){
        newPopup(objeto);
    }

    function apaga(objeto){
        document.cookie = escape('id') + "=" + 
            escape(objeto) + "; path=/";

        document.write('<?php Data::delete($_COOKIE['id']);?>');
    }
    function newPopup(objeto){
        newpopupWindow = window.open('', 'pagina', "width=250 height=250");
        newpopupWindow.document.write("ID = ", objeto.usuario_id, "<br/>",
                                      "Nome = ", objeto.nome, "<br/>",
                                      "Sobrenome = ", objeto.sobrenome, "<br/>",
                                      "CPF = ", objeto.cpf, "<br/>",
                                      "Email = ", objeto.email, "<br/>",
                                      "Data de nascimento = ", objeto.data_de_nascimento, "<br/>",
                                      "Permissão = ", objeto.permissao), "<br/>";
    }
</script>
</html>