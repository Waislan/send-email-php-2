<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Send Email</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/form-contato/css/style.css">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <form id="form02" class="col-md-6 offset-md-3">
        <div class="form-row" style="display: flex; justify-content: center;">
            <div class="col-sm-12 col-md-6">
                <label for="inputNome">Nome completo</label>
                <input type="text" id="inputNome" class="form-control estilo-input" placeholder="Nome completo" required>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control estilo-input" placeholder="Email" required>
            </div>
        </div>
        <div class="form-row" style="display: flex; justify-content: center; margin-top: 10px;">
            <button id="btnEnviar" class="btn btn-info" type="submit">Enviar
                <span id="spinner" class="spinner-border spinner-border-sm" role="status" hidden="true"></span>
            </button>
        </div>
    </form>
    
    <script src="assets/form-contato/js/functions.js"></script>
</body>

</html>
