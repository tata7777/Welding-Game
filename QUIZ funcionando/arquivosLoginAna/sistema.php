</?php 
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['name']) == true) and (!isset($_SESSION['password']) == true) {
        unset($_SESSION['name'] );
        unset($_SESSION['password'] );
        header('Location: login.php');

    }
    $logado = $_SESSION['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        a{
            text-align: left;
            color:black
        }
        a:hover{
            color:gray;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <a href="sair.php">Log Out </a>
    </div>
</body>
</html>