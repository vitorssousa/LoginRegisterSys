<?php 
require_once('config.php');

$user = $_POST['user'];
$email = $_POST['email'];
$age = $_POST['age'];
$passw = $_POST['passw'];

// verificar se o email é único no banco

$checkmail = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'");

if ($checkmail->num_rows != 0) {
    echo "Esse email já pertence a uma conta, <a href='./index'>entrar</a>";
} else {
    // faz o insert
    $query = "INSERT INTO users(Username,Email,Age,Password) VALUES('$user','$email','$age','$passw')";
    mysqli_query($con, $query) or die("Erro na inserção dos dados");
    echo "<div id='success-box'>
            <p id='success'>Cadastro realizado!</p>
            <button class='btn btn-primary' id='logar'>Entrar</button>
        </div>";

    
}

?>