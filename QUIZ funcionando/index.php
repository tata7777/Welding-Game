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

    <div id="vitorias">
        <img src="../QUIZ funcionando/img/vitorias.png" >
    </div>
    

    <div id="todosjuntos">
        <img src="../QUIZ funcionando/img/todos-juntos.png" >
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
              <p>INSTRUCTIONS<br><br>
                    Dear Welding Enthusiast,<br>
                    You are welcome to assess your welding knowledge by answering this quiz!<br>
                    The quiz structure is based on the IIW-IAB welding personnel qualification system consisting of four modules: Welding Processes, Materials, Welding Design and Fabrication. You can choose one of four modules or any combination of them. <br>
                    The quiz is composed by multiple-choice questions grouped in 20 difficulty levels. There are 3000 questions in this quiz. Each question has only one correct answer. In order to confirm the correct answer choice, you have to click on “Enter”. <br>
                    You can choose the “Timer” option (60 s to answer the question) or “No Timer” option.<br>
                    In this first version of the quiz, there are only two languages available: English and Portuguese (Brazil). <br>
                    The functions “Last week winner” and “Your victories” are not activated yet. Furthermore, the score is not functional neither. <br>
                    </p>
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
                 <p> Your comments and suggestions are very welcome:<br><br>weldingame@gmail.com.</p>
            </div>
              <div class="line2"></div>
              <label for="click2" class="close-btn2">Close</label>
            </div> 
          </div>
        
        <!-- botao About Us -->
        <div class="center3">
            <input type="checkbox" id="click3">
            <label for="click3" class="click-me3">About Us</label>
            <div class="content3">
              <div class="header3">
                <h2>About Us</h2>
                <label for="click3" class="fas fa-times"></label>
              </div>
              <div class="text-about-us">
             <!-- <label for="click" class="fas fa-check"></label> -->
              <p> The quiz was developed in the Federal University of Uberlandia (https://ufu.br), Faculty of Mechanical Engineering, Welding Group (Laprosolda).<br>
                The list of developers and their contribution:<br>
                Vladimir Ponomarov (Brazil): General coordination, question developer (2008 – present)<br>
                Ana Teresa Taveira Bachur (Brazil): Present layout, new structure, login, database (2021 – 2022)<br>
                Tássio de Farias Gomes (Brazil): Present layout, new structure, login, database (2021 – 2022)<br>
                Ron Nickel (Canada): Question developer (2022)<br>
                Felipe Chagas R. de Souza (Brazil): Quiz first functional version improvement (2019)<br>
                Kauê Oliveira Drigo (Brazil):	First functional version of the quiz (2018)<br>
                Ruslan Didkivskyi (Ukraine): Very first draft version (2009)<br>

            </p>
               </div>
              <div class="line3"></div>
              <label for="click3" class="close-btn3">Close</label>
            </div> 
          </div>


        <!-- Tempo restante para responder a pergunta, se houver -->
        <div id="time">
        </div>

        <!-- aqui tinha a div "time-animation e eu movi para as segundas páginas-->

        <!-- aqui tinha a div spark e eu movi para as segundas páginas -->

        <!-- Balão de fala do Darth Vader -->
        <div id="dv-speech">
        </div>

        <!-- Balão de fala do Soldador -->
        <div id="welder-speech">
        </div>

    </div>

    <!-- movi o id quiz container para as segundas paginas -->
     
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


</body>

</html>