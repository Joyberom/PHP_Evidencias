<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username) || empty($password)){
            echo '<div class="alert alert-danger">Igrese un usuario y contraseña </div>';
        }else{
            $user = new User;

            if($user->getUser($username,$password)){
                session_start();
                $_SESSION['usuario'] = $username;
                header('Location: menu.php');
            }else{
             echo '<div class="alert alert-danger">Usuario o Contrasena incorrectos</div>';
            }
        }

    }
    ?>