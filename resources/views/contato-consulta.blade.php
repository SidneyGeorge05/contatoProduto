<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de Produtos | Bom Barato Supermercado</title>
  <link rel="icon" href="imagens/icon.png">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

      <div class="col-sm-9 col-md-7 col-lg-11 mx-auto">
        <div class="card border-2 shadow rounded-3 my-5">
          <div class="card-body p-6 p-sm-5">
            <center>
              <h1>Consulta de Produtos</h1>
            </center>
            <br>
            <div class="mb-3">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Descrição do Produto</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($contatos as $c)
                  <tr>
                    <th scope="row">{{$c->idProduto}} </th>
                    <td>{{$c->nomeProduto}}</td>
                    <td>{{$c->valorProduto}}</td>
                    <td>{{$c->qtdProduto}}</td>
                    <td>{{$c->descProduto}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>