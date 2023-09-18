<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/css/style.css">
    <title>RU-COINS</title>
</head>
<body>
    <div class="main">
        <div class="main-content">
            <form>
                <div class="main-container">
                    <div class="image">
                        <img src="./view/img/Brasao_UFT.webp" alt="Logo da Universidade Federal do Tocantins">
                    </div>
                    <div class="main-itens">
                        <div class="btn-login textfield">
                            <label for="" class="form-label">CPF:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Digite seu CPF" >
                        </div>
                        <div class="btn-help textfield">
                            <label for="" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite sua senha">
                        </div>
                        <button type="button" id="btn" class="btn btn-success">Entrar</button>
                        <button type="button" id="btn" class="btn btn-secondary">Esqueci a senha</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-itens">
            <img src="./view/img/brasao_uft.webp" alt="">
            <img src="./view/img/logocurso.png" alt="">
        </div>
            Engenharia de software 2023/2  <?= date ('Y'); ?>
    </footer>

</body>
</html>