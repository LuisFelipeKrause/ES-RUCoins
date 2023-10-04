<?php
        include_once '../model/Data.php';
        $data = new Data();
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $linha = $data->tableId(1);
        $vetor = mysqli_fetch_assoc($linha);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/PHP/ES-RUCoins/view/css/style.css">
    <title>Editar Usuário</title>
</head>

<body>
    <div class="main">
        <div class="head-itens">
            <img src="http://localhost/PHP/ES-RUCoins/view/img/brasao_uft.webp" alt="">
            <a href="#"><i class="fa-solid fa-user"></i></a>
        </div>
        <div class="forms-itens">
            <form class="form-conteiner" action="../controller/EditPanel.php" method="post">
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $vetor["nome"]; ?>" id="" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="CPF" id="" value="<?php echo $vetor['cpf']; ?> " aria-describedby="">
                    </div>
                </div>

                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $vetor['email']; ?>" id="" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Número de matricula</label>
                        <input type="text" class="form-control" name="numMat" valor="<?php echo "NULL"; ?>" id="" aria-describedby="">
                    </div>
                </div>
                <div class="form-submit">
                    <select class="form-select" name="optione" aria-label="Permissão">
                        <option selected><?php echo $vetor['permissao']; ?></option>
                        <option value="1">Adm</option>
                        <option value="2">Usuário</option>
                        <option value="3">Tecnico</option>
                    </select>
                    <button type="submit" name="enter" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
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

</html>