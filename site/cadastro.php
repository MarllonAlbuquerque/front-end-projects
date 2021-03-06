
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/c37ef191-10dc-4cd4-a550-97172c49e7e2_200x200.png">
    <link rel="stylesheet" href="./estiloconsulta.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">

    <title>Go Poland</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"> <img src="./imagens/319510fe-2436-45d4-b786-df72eb62d8cc_200x200.png"
                    alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./cadastro.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <section>
        <div id="form">
            <form action="./cadastrodb.php" method="POST">
                <div id="name">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="sobrenome" placeholder="Sobrenome">
                </div>

                <div id="endereço">
                    <input type="text" name="endereço" placeholder="Endereço" maxlength="30">
                    <input type="text" name="complemento" placeholder="complemento" maxlength="30">
                </div>
                <input type="number" name="numero" placeholder="Número" maxlength="30">
                <input type="text" name="estado" placeholder="Estado" maxlength="30">
                <input type="text" name="bairro" placeholder="Bairro" maxlength="30">
                <input type="text" name="cidade" placeholder="Cidade" maxlength="20">
                <input type="number" name="cep" placeholder="CEP" maxlength="11">
                <input type="text" name="email" placeholder="Email" maxlength="40">
                <input type="password" name="senha" placeholder="Senha" maxlength="32">


                <button type="submit" class="btn btn-light"> <strong>Cadastrar</strong></button>

            </form>
        </div>


    </section>
    <footer>
        <p> <strong> &copy; 2015 gopoland.com</strong> </p>


    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>