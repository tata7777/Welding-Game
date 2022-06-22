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
        #recomecar{
            padding:5px;
            width: 7%;
            top: 35%;
            left: 80%;
            border-radius: 50%;
            font-size: max(11px, 1vw);
            cursor:pointer;
            position: absolute;
            background-color: rgb(238, 87, 87);
        }
        #sair{
            padding:5px;
            width: 7%;
            top: 40%;
            left: 80%;
            border-radius: 50%;
            font-size: max(11px, 1vw);
            cursor:pointer;
            position: absolute;
            background-color: rgb(238, 87, 87);
            }
        #language{
            display: none;
        }
        @media(max-width:600px){
            #secondImage img {
                display: none;}
            #baloes img{
                display: none;}
            #subject{
                top: 15%;
                left: 20%;
            }
            #type{
                top: 30%;
                left: 20%;
            }
            #comeca{
                padding:10px;
                width: 20%;
                top: 23%;
                left: 60%;
                border-radius: 60%;
            }
                    
    }

    </style>

    <body>
        <div id="elements">
            <div id="title">
                <?php
                    echo "<h1>Bem-vindo $logado!</h1>";
                ?>
            </div>

            <!--<div id="story-image">-->

                <div id="secondImage">
                    <img src = "../QUIZ funcionando/img/escada nova portugues.png" >
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
                    <input type="radio" id="comtempo" name="type" checked />
                    <label for="pt">60s</label> <br>

                    <input type="radio" id="semtempo" name="type" />
                    <label for="en">Ilimitado</label>
                </div>

                <div style="width:100%" id="language">
                    <h3>Language</h3>
                    <input type="radio" id="pt" name="language" checked/>
                    <label for="pt">Português</label>

                    <input type="radio" id="en" name="language" />
                    <label for="en">English</label>
                </div>

                <button id="comeca" onclick="start()">INICIAR</button>
            
        </div>

        <div id="stair"> 
           <div id="welding-knowledge">
                    <img src="../QUIZ funcionando/img/welding-knowledge.png" >
                </div>
        </div>

        <!-- Animação do tempo restante para responder a pergunta -->
        <div id="time-animation">
        </div>

        <!-- Área de comando do jogador -->
        <div id="quiz-container">
            <!-- Região das perguntas -->
            <div id="quiz-questions">
            </div>

            <!-- Região das respostas -->
            <div id="quiz-answers">
            </div>

            <div id="credits2">
                Kauê Oliveira Drigo, Dr Vladimir Ponomarov, Felipe Chagas Rodrigues de Souza
            </div>
        </div>

        <!-- Animação na ponta da tocha/eletrodo -->
        <div id="spark">
        </div>

        <!-- Personagem soldador -->
        <div id="welder">
        </div>

        <!-- Personagem Darth Vader -->
        <div id="darth-vader">
        </div>

        <div id="speechs">

            <!-- Balão de fala do Soldador -->
            <div id="welder-speech">
            </div>

            <!-- Balão de fala do Darth Vader -->
            <div id="dv-speech">
            </div>
        <div>
        
        <input id="recomecar" type="button" value="RESTART" onclick="recomecar()"/>

        
        <input id="sair" type="button" value="END" onclick="sair()"/>


        <!-- Nome dos níveis -->
        <div id="levels">
            <div id="level_1">
            </div>

            <div id="level_2">
            </div>

            <div id="level_3">
                
            </div>

            <div id="level_4">
            </div>
        </div>

        <!-- Tempo restante para responder a pergunta, se houver -->
        <div id="time">
        </div>

        
        <!-- CARREGAMENTO DOS SCRIPTS -->
        <script src="js/script.js"></script>
        <script src="js/time_move.js"></script>
        <script src="js/question_random.js"></script>
        <script src="js/question_current.js"></script>
        <script src="js/move_characters.js"></script>
        <script src="js/speeches.js"></script>
        <script src="js/finish.js"></script>
        <script src="js/level_name.js"></script>
        <script src="js/botoes.js"></script>

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
