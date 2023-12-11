<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="music.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>

    <title>Dashboard</title>
</head>
<body class="p-0">
    <?php 
        // confirma se o usuário está logado para poder mostrar o dashboard
        session_start();
        if(!isset($_SESSION['email'])){
            header('location: /index.php');
        } else {
 
        ?>
    

            <div class="container-fluid bg-body-tertiary">
                <nav class="navbar bg-body-tertiary c-navbar mx-3">
                    <h1 class="nav-brand">Logo</h1>
                    <div class="d-flex align-items-center">
                        <a href="/edit.php" class="nav-item mx-3">Editar Perfil</a>
                        <form action="/php/loggout.php">
                            <input type="submit" class="btn btn-primary" value="Sair">
                        </form>
                    </div>
                </nav>
            </div>

            <main class="mt-5">
                <div class="container justify-content-between d-flex alig-items-center">
                    <p class="bg-primary rounded p-3 text-white">Bem vindo <strong><?php echo $_SESSION['user'];?></strong>!</p>
                    <p class="bg-primary rounded p-3 text-white">Idade: <?php echo $_SESSION['age'];?></p>
                </div>
                <div class="container d-flex flex-column">
                    <img src="/media/f.gif" class="mx-auto" alt="ANIMATED GIF">
                    <audio id="backaudio" controls style="display:none;">
                        <source src="/media/m.mp3" type="audio/mp3">
                    </audio>
                    <span class="material-symbols-outlined mx-auto" style="font-size:100px;cursor:pointer;" id="playbutton">
                        play_pause
                    </span>

                    
                </div>
            </main>
            
            <?php 
        }
        ?>
</body>
</html>