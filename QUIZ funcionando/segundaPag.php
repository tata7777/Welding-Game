<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['name']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: index.php');
    }
    $logado = $_SESSION['name'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Quiz Da Soldagem">
        <meta name="keywords" content="">
        <meta name="author" content="Kauê Drigo & Felipe Chagas">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Welding Game</title>
        
        <link href="style/style.css" rel="stylesheet" />
    </head>

    <style>
        #title {
        width: 1100px;
        text-align: center;
        font-size: 15px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        margin-bottom: 50px;
        font-family: 'Rouge Script', cursive;
        color: rgb(228, 85, 85);
        text-shadow: 0.1em 0.1em #333
        }

        #secondImage {
            width:1300px;
            height: 473px;
            position: absolute;
            top:140px;
            left: 0px;
            right: 0px;
            margin: auto;
            background: transparent url("img/escada nova ingles.png") no-repeat left bottom;
            background-size: cover;
            }
        
        #baloes{
            width: 683px;;
            height:422px;
            top: 70px;
            position: absolute;
            left: 220px;
            right: 0px;
            margin: auto;
            background: transparent url("img/baloes-teste.png") no-repeat left bottom;
            background-size: cover;   
        }
        #subject{
            width: 100%;
            font-size:15px;
            top: 320px;
            left: 80px;
            position: absolute;
            font-weight: bold;
        }
        #type{
            width: 100%;
            font-size:15px;
            top: 470px;
            left: 80px;
            position: absolute;
            font-weight: bold;
        }
        #comeca{
            padding:5px;
            width:5%;
            margin-top: 10px;
            margin-left: 1150px;
            border-radius: 100px;
            font-size: 15px;
            cursor:pointer;
            position: relative;
            background-color: rgb(212, 209, 209);
            }
        #comeca:hover{
                background-color: beige;
            }

    </style>

    <body>
        <div id="title">
            <?php
                echo "<h1>Welcome $logado!</h1>";
            ?>
        </div>

        <div id="secondImage"></div>
        <div id="baloes"></div>
        <div id="subject">
            <h3>Subject</h3>
            <input type="checkbox" id="processos" name="subject" checked/>
            <label for="processos">Processes</label><br>

            <input type="checkbox" id="materiais" name="subject" checked/>
            <label for="materiais" id="materials">Materials</label><br>

            <input type="checkbox" id="projeto" name="subject" checked/>
            <label for="projeto">Project</label><br>

            <input type="checkbox" id="fabricacao" name="subject" checked/>
            <label for="fabricacao">Fabrication</label><br>
        </div>
        <div id="type" >
            <h3>Timer option</h3>
            <input type="radio" id="comtempo" name="type" checked />
            <label for="pt">60s</label> <br>

            <input type="radio" id="semtempo" name="type" />
            <label for="en">Unlimited</label>
        </div>
        <button id="comeca" onclick="start()">Start</button>
    </body>

</html>

