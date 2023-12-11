<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/edit.css">
    <script src="/edit.js" defer></script>
    <title>Editar perfil</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>

    
</head>
<body> 

    <?php 
            // confirma se o usuário está logado para poder mostrar o dashboard
            session_start();
            if(!isset($_SESSION['email'])){
                header('location: /index.php');
            } else {
    
            ?>

    <header>
            <div class="container-fluid bg-body-tertiary">
                <nav class="navbar bg-body-tertiary c-navbar mx-3">
                    <a href='index.php' class='text-decoration-none text-dark'><h1 class="nav-brand">Logo</h1></a>
                    <div class="d-flex align-items-center">
                        <a href="" class="nav-item mx-3">Editar Perfil</a>
                        <form action="/php/loggout.php">
                            <input type="submit" class="btn btn-primary" value="Sair">
                        </form>
                    </div>
                </nav>
            </div>
    </header>



    <main>
        <form id="updateForm">
            
            <legend>Insira os novos dados</legend>
            
            <div class="mb-3">
                <label for="" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="user">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Idade</label>
                <input type="number" class="form-control" name="age">
            </div>

            <input type="submit" value="Salvar" class="btn btn-primary">
        </form>
    </main>
    <?php 
        }
        ?>

    
</body>
</html>