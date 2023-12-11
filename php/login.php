<?php 
    require_once('config.php');

    session_start();
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pass = mysqli_real_escape_string($con, $_POST['password']);

        $query = "SELECT * FROM users WHERE Email='$email' AND Password='$pass'" or die("select error");

        $result = mysqli_query($con, $query);

        $row = mysqli_fetch_assoc($result);


        if (!empty($row)) {
            $_SESSION['email'] = $row['Email'];
            $_SESSION['user'] = $row['Username'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['id'] = $row['Id'];

            $response = ['success' => true, 'location' => '/home.php'];

        } else {

            $response = ['success' => false, 'alert' => 'Email ou senha incorreta!'];
            
        }


        header('Content-type: application/json');
        echo json_encode($response);
    } else {
        $response = ['message' => false, 'alert' => 'Insira email e senha!'];
        echo json_encode($response);

    }
    



?>