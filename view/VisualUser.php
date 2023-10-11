<?php
        include_once '../controller/ControlPanel.php';
        $ctrl = new ControlPanel();
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $linha = $ctrl->pullData(1, $id);
        $vetor = mysqli_fetch_assoc($linha);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Editar Usuário</title>
</head>

<body>
    <div class="main">
        <?php include "./components/header.html"?>
        <div class="forms-itens">
            <form class="form-conteiner" action="../controller/EditPanel.php" method="post">
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $vetor["nome"]; ?>" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="CPF" id="" value="<?php echo $vetor['cpf']; ?> " readonly="readonly">
                    </div>
                </div>

                <div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $vetor['email']; ?>" id="" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Número de matricula</label>
                        <input type="text" class="form-control" name="numMat" valor="<?php echo "NULL"; ?>" id="" readonly="readonly">
                    </div>
                </div>
                <div class="mb-3">
                        <label for="" class="form-label">Permissão</label>
                        <input type="text" class="form-control" name="numMat" valor="<?php echo $vetor['permissao']; ?>" id="" readonly="readonly">
                </div>
            </form>
        </div>
    </div>
    <?php include "./components/footer.html"?>
</body>
<script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>

</html>