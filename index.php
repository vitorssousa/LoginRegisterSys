<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <script src="login.js" defer></script>
    <title>Log in</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
</head>
<body>
    <?php 
        // se o usuário estiver logado a página de login nao estará disponível
        session_start();

        if(isset($_SESSION['email'])){
            header('location: /home.php');
        }else {
    
    ?>
    <form id="loginform">
        <legend>Login / Register System</legend>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control inputfield" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control inputfield" name="password">
        </div>
        <p id="alert"></p>
        <p>Não está cadastrado? <a href="/register.php">Cadastrar</a></p>
        <button type="submit" class="btn btn-primary" id="subm">Entrar</button>
    </form>

    <?php 
        }
    ?>
</body>
</html>