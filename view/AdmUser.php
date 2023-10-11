<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
</head>

<body>
    <?php include "./components/header.html"?>
    <div class="main">
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
                        include_once '../controller/ControlPanel.php';
                        $ctrl = new ControlPanel();
                        if(isset($_POST['Search']) && isset($_POST['CPF']) && !empty($_POST['CPF'])){
                            $result = $ctrl->pullData(0, $_POST['CPF']);
                            resultados($result);
                        }else{
                            if(isset($_POST['Register'])){
                                header("Location: ../view/CadstroUsuario.php");
                            }else{
                                $result = $ctrl->pullData(2, null);
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
                                    <a href='./VisualUser.php?id=".$res['usuario_id']."'><i id='icon-plus' class='fa-solid fa-plus'></i></a>

                                    <a href='./EditUser.php?id=".$res['usuario_id']."'><i id='icon-pencil' class='fa-regular fa-pen-to-square'></i></a>

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
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    function apaga(objeto){
        newpopupWindow = window.open('', 'Apagar Registro?', "width=250 height=150");
        newpopupWindow.document.write("<h1 style='color:black; font-size:20px; text-align: center;'>Deseja apagar este registro?</h1><a href='../controller/deletPanel.php?id=",objeto,"'><button btn-lg' type='submit' name='yes' style='background-color:red; width:90; height:30px; border:none; border-radius: 30px; color:white; text-align:center;  margin: 15px 15px;'>Sim</button></a> <a href='#' onclick='window.close()'><button type='submit' name='not' style='background-color:blue; width:90; height:30px; border:none; border-radius: 30px; color:white; text-align:center;'>Não</button></a>");
    }
</script>
</html>