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
                <form class="search-form" method="post">
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
                        echo "<tr>
                            <th>1</th>
                            <td>José pereira da Silva</td>
                            <td>jose.pereira@gmail.com</td>
                            <td class='table-icon-width'>User
                                <a href='#'><i id='icon-plus' class='fa-solid fa-plus'></i></a>
                                <a href='#'><i id='icon-pencil' class='fa-regular fa-pen-to-square'></i></a>
                                <a href='#'><i id='icon-trash' class=' fa-solid fa-trash'></i></a>
                            </td>
                        </tr>"
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

</html>