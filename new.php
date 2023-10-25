<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body class="w-100-vw h-100-vh">
    <div>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">ComprasList</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="new.php">Novo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="d-grid place-items-center">
            <div class="container">
                <h1>Nova compra</h1>
                <form action="dao/compra/create.php" method="get" class="col-12 vstack gap-3">
                    <div>
                        <label class="form-label" for="txtnome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="txtnome" required>
                    </div>
                    <div>
                        <label class="form-label" for="numvalor">Valor</label>
                        <input class="form-control" type="number" name="valor" id="numvalor" step="0.01" required>
                    </div>
                    <div>
                        <label class="form-label" for="numquantidade">Quantidade</label>
                        <input class="form-control" type="number" name="quantidade" id="numquantidade" required>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </main>
    </div>

    <script src="scripts/bootstrap.bundle.min.js"></script>
</body>

</html>