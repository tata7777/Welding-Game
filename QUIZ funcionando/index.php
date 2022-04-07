

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Quiz Da Soldagem">
    <meta name="keywords" content="">
    <meta name="author" content="Kauê Drigo & Felipe Chagas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <title>Welding Game</title>
    
    <link href="style/style.css" rel="stylesheet" />
 
</head>

<body>
    <!-- Título da página ou cabeçalho -->
    <div id="page-name">
        <h1>Discover your knowledge of welding!</h1>
    </div>

    <!--Caixa do Login-->
    <!--Tentar depois tirar a tag de style daqui e colocar no style.css-->
    <div class="box" id="box">
        <form action="testLogin.php" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                
                <div class="inputBox">
                    <label for="name" class="labelInput"><strong>Name</strong></label> <br>
                    <input type="text" name="name" id="name" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="password" class="labelInput"><strong>Password</strong></label><br>
                    <input type="password" name="password" id="password" class="inputUser" required>
                </div>
                <br>
                <button type="submit" name="submit" id=enviar>Submit</button>
                <div class="sigup">
                    <br><strong>Don't have an account? </strong> <a href="registro.php">Sign Up</a>
                </div>
            </fieldset>
        </form>

    </div>

    <div id="folhaLouro">
        <img src="../QUIZ funcionando/img/folha-de-louro.png" >
    </div>

    <div id="firstImage">
        <img src="../QUIZ funcionando/img/first-page.png" >
    </div>


    <!-- Divisão que contém as imagens do quiz -->
    <div id="story-image">

        <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>

        <!-- botao HELP -->
        <div class="center">
            <input type="checkbox" id="click">
            <label for="click" class="click-me">Help</label>
            <div class="content">
              <div class="header">
                <h2>Help</h2>
                <label for="click" class="fas fa-times"></label>
              </div>
              <div class="text">
             <!-- <label for="click" class="fas fa-check"></label> -->
              <p>INSTRUCTIONS<br><br>The game contains questions about welding in different difficulty levels, accessed progressively
                as the player gets the quiz questions right. There are a total of 20 questions, with 4 alternatives of
                answer each, but only one of them is correct. Any wrong answer ends the game.<br><br>Choose an alternative, and press ENTER to confirm the answer.<br><br>TIME 60s (ER: COATED ELECTRODE): Player has 60 seconds to respond
                each question. If the time runs out, the game is ended, characterizing the player's defeat.<br><br>
                UNLIMITED TIME (TIG): The time available to answer each question is unlimited.
                Ideal game mode for studying.</p>
               </div>
              <div class="line"></div>
              <label for="click" class="close-btn">Close</label>
            </div> 
          </div>
        
        <!--Botão Feedback-->
        <div class="center2">
            <input type="checkbox" id="click2">
            <label for="click2" class="click-me2">Feedback</label>
            <div class="content2">
              <div class="header2">
                <h2>Feedback</h2>
                <label for="click2" class="fas fa-times"></label>
              </div>
             <!-- <label for="click" class="fas fa-check"></label> -->
             <div class="text-feed">
                 <p>If you have any problem, question or sugestion, feel free to contact us in:<br><br>welding.game@gmail.com.</p>
            </div>
              <div class="line2"></div>
              <label for="click2" class="close-btn2">Close</label>
            </div> 
          </div>
        
        


        <!-- Instruções do jogo -->
        <!-- <div id="help-text">
            <h2>INSTRUÇÕES</h2>

            <p>&nbsp &nbsp &nbsp &nbsp O jogo contém perguntas sobre soldagem em diversos níveis de dificuldade, acessados progressivamente
            à medida que o jogador acerta as perguntas do quiz. No total são 20 perguntas, com 4 alternativas de
            resposta cada, mas apenas uma delas está correta. Qualquer resposta errada finaliza o jogo.</p>

            <p>&nbsp &nbsp &nbsp &nbsp Escolha uma alternativa, e pressione ENTER para confirmar a resposta.</p>
            
            <p>&nbsp &nbsp &nbsp &nbsp TEMPO 60s (ER: ELETRODO REVESTIDO): O jogador tem 60 segundos para responder
            cada pergunta. Caso o tempo se esgote, o jogo é finalizado, caracterizando derrota do jogador.</p>
            
            <p>&nbsp &nbsp &nbsp &nbsp TEMPO ILIMITADO (TIG): O tempo disponível para responder cada pergunta é ilimitado.
            Modo de jogo ideal para estudar.</p>            
        </div>-->

        <!-- Personagem soldador -->
        <div id="welder">
        </div>

        <!-- Personagem Darth Vader -->
        <div id="darth-vader">
        </div>
        
        <!-- Tempo restante para responder a pergunta, se houver -->
        <div id="time">
        </div>

        <!-- Animação do tempo restante para responder a pergunta -->
        <div id="time-animation">
        </div>

        <!-- Animação na ponta da tocha/eletrodo -->
        <div id="spark">
        </div>

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

        <!-- Balão de fala do Darth Vader -->
        <div id="dv-speech">
        </div>

        <!-- Balão de fala do Soldador -->
        <div id="welder-speech">
        </div>

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
     
    <!-- Créditos -->
    <div id="credits">
        <div id="location">
            BRAZIL, UBERLANDIA - MG
        </div>
        <div id="c-image1">
            <img src = "../QUIZ funcionando/img/ufu.png" >
        </div>
        <div id="c-image2">
            <img src = "img/femec.png" >
        </div>
        <div id="c-image3">
            <img src = "img/logoLaprosolsa.png" >
        </div>
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