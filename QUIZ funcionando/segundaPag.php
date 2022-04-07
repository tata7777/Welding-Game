<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['name']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: index.php');
    }
    $logado = $_SESSION['name'];
    $language = $_SESSION['language']
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Quiz Da Soldagem">
        <meta name="keywords" content="">
        <meta name="author" content="Kauê Drigo & Felipe Chagas">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title></title>
        
        <link href="style/style.css" rel="stylesheet" />
    </head>

    <style>
        #title {
            font-size: max(9px, 1.2vw);
            text-align: center;
            font-family: 'Rouge Script', cursive;
            color: rgb(228, 85, 85);
            text-shadow: 0.1em 0.1em #333
        }

        #secondImage img {
            width:85%;
            position:absolute;
            left: 10%;
            top: 22%;
            }
        
        #baloes img {
            width: 43%;
            position: absolute;
            left: 39%;
            top: 18%;  
        }
        #subject{
            font-size: max(10px, 1.1vw);
            top: 50%;
            left: 20%;
            position: absolute;
            font-weight: bold;
        }
        #type{
            font-size: max(10px, 1.1vw);
            top: 68%;
            left: 20%;
            position: absolute;
            font-weight: bold;
        }
        #comeca{
            padding:5px;
            width: 7%;
            top: 80%;
            left: 30%;
            border-radius: 50%;
            font-size: max(11px, 1vw);
            cursor:pointer;
            position: absolute;
            background-color: rgb(238, 87, 87);
            }
                    #comeca:hover{
                background-color: beige;
            }

    </style>

    <body>
        <div id="title">
            <?php
                echo "<h1>Bem-vindo $logado!</h1>";
            ?>
        </div>

        <div id="secondImage">
            <img src = "img/escada nova portugues.png" >
        </div>

        <div id="baloes">
            <img src = "img/baloes-teste.png" >
        </div>

        <div id="subject">
            <h3>Temas</h3>
            <input type="checkbox" id="processos" name="subject" checked/>
            <label for="processos">Processos</label><br>

            <input type="checkbox" id="materiais" name="subject" checked/>
            <label for="materiais" id="materials">Materiais</label><br>

            <input type="checkbox" id="projeto" name="subject" checked/>
            <label for="projeto">Projeto</label><br>

            <input type="checkbox" id="fabricacao" name="subject" checked/>
            <label for="fabricacao">Fabricação</label><br>
        </div>

        <div id="type" >
            <h3>Limite de Tempo:</h3>
            <input type="radio" id="comtempo" name="tipo" checked />
            <label for="pt">60s</label> <br>

            <input type="radio" id="semtempo" name="tipo" />
            <label for="en">Ilimitado</label>
        </div>
        <button id="comeca" onclick="startCons()">INICIAR</button>
    </body>

</html>
