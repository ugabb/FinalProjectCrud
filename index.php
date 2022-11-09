<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Cadastro de Clientes</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">            
            <a class="nav-link" href="index.php">Cadastro de Produtos</a>
            <a class="nav-link" href="produtos.php">Listagem de Produtos</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <h1>Cadastro de Produtos</h1>
                <form action="salvar.php" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="form-group mb-3">
                        <label>Nome:</label>
                        <input type="text" name="nomeProduto" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Quantidade:</label>
                        <input type="number" name="qtdProduto" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Valor:</label>
                        <input type="number" name="valorProduto" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-success"type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
