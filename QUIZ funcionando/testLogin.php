<?php

    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password']))
    {
        //Acessa
        include_once('config.php');
        $name = $_POST['name'];
        $password = $_POST['password'];

        // variável que faz uma busca na tabela de usuários com o name e password inseridos. Primeiramente, a busca é feita com o idioma de cadastro
        // português, caso não seja encontrado uma linha com esses dados, é feita outra pesquisa, porém com o idioma inglês cadastrado. 
        $sql= "SELECT * FROM usuarios WHERE name_cadastro = '$name' and password_cadastro = '$password' and language = 'portugues' ";

        $result = $conexao ->query($sql);

        if(mysqli_num_rows($result)<1 ){
        
            $sql2 = "SELECT * FROM usuarios WHERE name_cadastro = '$name' and password_cadastro = '$password' and language = 'english' ";

            $result2 = $conexao ->query($sql2);

                if(mysqli_num_rows($result2)<1 ) {
                    unset($_SESSION['name']);
                    unset($_SESSION['password']);
                    header('Location: index.php');
                }
                else{
                    $_SESSION['name'] =$name;
                    $_SESSION['password'] =$password;
                    header('Location: segundaPagIng.php');
                }
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