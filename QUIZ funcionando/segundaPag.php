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
        <meta name="author" content="Kauê Drigo, Felipe Chagas, Ana Teresa Bachur, Tassio Farias">
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
            left: 180px; /*antes era 80*/
            position: absolute;
            font-weight: bold;
        }
        #type{
            width: 100%;
            font-size:15px;
            top: 470px;
            left: 180px; /*antes era 80*/
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
    

        <!-- CARREGAMENTO DOS SCRIPTS -->
    <script src="js/script.js"></script>
    <script src="js/time_move.js"></script>
    <script src="js/question_random.js"></script>
    <script src="js/question_current.js"></script>
    <script src="js/move_characters.js"></script>
    <script src="js/speeches.js"></script>
    <script src="js/finish.js"></script>
    <script src="js/level_name.js"></script>

    <script src="js/level.js"></script>
    <script src="js/questions/questions1.js"></script>
    <script src="js/questions/questions1en.js"></script>
    <script src="js/questions/questions2.js"></script>
    <script src="js/questions/questions2en.js"></script>
    <script src="js/questions/questions3.js"></script>
    <script src="js/questions/questions3en.js"></script>
    <script src="js/questions/questions4.js"></script>
    <script src="js/questions/questions4en.js"></script>
    <script src="js/questions/questions5.js"></script>
    <script src="js/questions/questions5en.js"></script>
    <script src="js/questions/questions6.js"></script>
    <script src="js/questions/questions6en.js"></script>
    <script src="js/questions/questions7.js"></script>
    <script src="js/questions/questions7en.js"></script>
    <script src="js/questions/questions8.js"></script>
    <script src="js/questions/questions8en.js"></script>
    <script src="js/questions/questions9.js"></script>
    <script src="js/questions/questions9en.js"></script>
    <script src="js/questions/questions10.js"></script>
    <script src="js/questions/questions10en.js"></script>
    <script src="js/questions/questions11.js"></script>
    <script src="js/questions/questions11en.js"></script>
    <script src="js/questions/questions12.js"></script>
    <script src="js/questions/questions12en.js"></script>
    <script src="js/questions/questions13.js"></script>
    <script src="js/questions/questions13en.js"></script>
    <script src="js/questions/questions14.js"></script>
    <script src="js/questions/questions14en.js"></script>
    <script src="js/questions/questions15.js"></script>
    <script src="js/questions/questions15en.js"></script>
    <script src="js/questions/questions16.js"></script>
    <script src="js/questions/questions16en.js"></script>
    <script src="js/questions/questions17.js"></script>
    <script src="js/questions/questions17en.js"></script>
    <script src="js/questions/questions18.js"></script>
    <script src="js/questions/questions18en.js"></script>
    <script src="js/questions/questions19.js"></script>
    <script src="js/questions/questions19en.js"></script>
    <script src="js/questions/questions20.js"></script>
    <script src="js/questions/questions20en.js"></script>
    </body>

</html>

