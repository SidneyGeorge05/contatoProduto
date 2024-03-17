<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produtos | Bom Barato Supermercado</title>
    <link rel="icon" href="imagens/icon.png">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/contato-form">
                <img src="imagens/logo.png">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/contato-form">Formulário de Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato-consulta">Consulta de Produtos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">

            <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-6 p-sm-5">
                        <form method="post" action="/contato-salvar">
                            @csrf
                            <center>
                                <h1>Cadastro de Produtos</h1>
                            </center>
                            <br>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" class="form-control" name="Nome" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Valor:</label>
                                        <input type="number" class="form-control" name="Valor" id="valor" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Quantidade:</label>
                                        <input type="text" class="form-control" name="Qtd" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1">Descrição:</label>
                                <textarea class="form-control" name="Descricao" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                            <br>
                            <center>
                                <button type="submit" class="btn btn-primary btn-login text-uppercase">Enviar</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>