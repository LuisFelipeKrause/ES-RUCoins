<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tela de login</title>
</head>

<body>
    <div class="main">
        <div class="main-content">
            <div class="main-container">
                <div class="image">
                    <img src="./img/Brasao_UFT.webp"
                        alt="Logo da Universidade Federal do Tocantins">
                </div>
                <div class="main-itens">
                    <form id="form" method="post" action="../controller/ControlPanel.php">
                        <div class="btn-login textfield">
                            <label for="" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Digite seu CPF" name="CPF">
                        </div>
                        <div class="btn-login textfield">
                            <label for="" class="form-label">Senha:</label>
                            <input type="password" class="form-control" placeholder="Digite sua senha" name="Pass">
                        </div>
                        <input type="submit" id="btn" name="enter" class="btn btn-success" value="Entrar"></button>
                        <input type="submit" id="btn" name="forgotPass" class="btn btn-secondary" value="Esqueci a Senha"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "./components/footer.html"?>
</body>

</html>