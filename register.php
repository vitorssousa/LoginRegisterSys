<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Cadastro</title>
    <script src="register.js" defer></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>

    
</head>
<body> 
    <form id="regForm">
        <legend>Login / Register System</legend>
        
        <div class="mb-3">
            <label for="" class="form-label">Usuário</label>
            <input type="text" class="form-control" name="user">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
            <p id="alert"></p>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Idade</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="password" class="form-control" name="passw">
        </div>
        <p>Já possui uma conta? <a href="/">Entrar</a></p>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>

    
</body>
</html>