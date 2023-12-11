<?php 
    session_start();
    require_once('config.php');

    $updateUser = $_POST['user'];
    $updateAge = $_POST['age'];
    $id = $_SESSION['id'];

    if (!empty($updateAge) && !empty($updateUser)) {
        
        $sql = "UPDATE users SET Username = '$updateUser' , Age = '$updateAge' WHERE Id = $id" or die("Update Error");
        
        if(mysqli_query($con, $sql)){
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['age'] = $_POST['age'];

            echo "<div class='message'>
                    <p>Editado com sucesso!</p>
                    <button id='okButton' class='btn btn-primary'>Ok!</button>
                </div>";
        } else {
            echo "<div class='message'>
                    <p>Erro ao atualizar!</p>
                    <button id='okButton' class='btn btn-primary'>Ok!</button>
                </div>";

        }
        
    } else {
        echo "<div class='message'>
        <p>Os dados não podem estar vazios!</p>
        <button id='okButton' class='btn btn-primary'>Ok!</button>
    </div>";
    }
?>