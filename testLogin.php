<?php

    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password']))
    {
        //Acessa
        include_once('config.php');
        $name = $_POST['name'];
        $password = $_POST['password'];

        //print_r('Name:' .$name);
        //print_r('Password:' .$password);

        $sql= "SELECT * FROM usuarios WHERE name_cadastro = '$name' and password_cadastro = '$password'";
    
        $result = $conexao ->query($sql);

        //print_r($sql);
        //print_r($result);
        
        if(mysqli_num_rows($result)<1 ){
            unset($_SESSION['name']);
            unset($_SESSION['password']);
            header('Location: index.php');
        }
        else{
            $_SESSION['name'] =$name;
            $_SESSION['password'] =$password;
            header('Location: segundaPag.php');
        }
    
    }
    else{
        header('Location: index.php');
    }


?>