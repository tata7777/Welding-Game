function validateFields() {
    const name = document.getElementById("studentName");
    const university = document.getElementById("university");

    var success = true;

    if(name.value == "") {
        document.getElementById("nameError").style.display = "block";
        success = false;
    }

    if(university.value == "") {
        document.getElementById("universityError").style.display = "block";
        success = false;
    }

    return success;
}

// Eletrodo não-consumível
function startNaoCons() {
    if(!validateFields()) return;

    var lingua = document.getElementsByName('language');

    var subject = document.getElementsByName('subject');

    var subjectValue = [];
    if(subject[0].checked) subjectValue.push(0);
    if(subject[1].checked) subjectValue.push(1);
    if(subject[2].checked) subjectValue.push(2);
    if(subject[3].checked) subjectValue.push(3);

    console.log(subjectValue);
    
    if(lingua[0].checked)
        quizStart(false,"pt", subjectValue);
    else
        quizStart(false,"en", subjectValue);
   
    document.getElementById("time-animation").style.backgroundImage = "url('img/tocha-tig.png')";
    document.getElementById("time-animation").style.webkitBackgroundSize = "cover";
}

// Eletrodo consumível
function startCons() {
    if(!validateFields()) return;

    var lingua = document.getElementsByName('language');

    var subject = document.getElementsByName('subject');

    var subjectValue = [];
    if(subject[0].checked) subjectValue.push(0);
    if(subject[1].checked) subjectValue.push(1);
    if(subject[2].checked) subjectValue.push(2);
    if(subject[3].checked) subjectValue.push(3);
    
    if(lingua[0].checked)
        quizStart(true,"pt", subjectValue);
    else
        quizStart(true,"en", subjectValue);

    document.getElementById("time-animation").style.backgroundImage = "url('img/eletrodo-revestido-time.png')";
    document.getElementById("time-animation").style.webkitBackgroundSize = "cover";
    document.getElementById("time-animation").style.transform = "rotate(180deg)";
}

// Informações sobre o quiz
function help() {
    // Ajusta a posição dos botões
    document.getElementById("consumivel").style.left = "665px";
    document.getElementById("consumivel").style.top = "94px";
    document.getElementById("nao-consumivel").style.left = "688px";
    document.getElementById("nao-consumivel").style.top = "185px";
    document.getElementById("help").style.left = "700px";
    document.getElementById("help").style.top = "280px";
    document.getElementById("help").disabled = true;                        // Desativa o botão "help"

    document.getElementById("option-box").style.left = "850px";
    document.getElementById("option-box").style.top = "64px";

    document.getElementById("story-image").style.backgroundImage = "none";  // Retira a imagem de fundo
    document.getElementById("help-text").style.display = "block";           // Mostra o texto (instruções)
}

var t = 60,                                                                 // Tempo para responder a pergunta
    time;                                                                   // Variável auxiliar de contagem de tempo
var questionNumber = 1;                                                     // Armazena o número do nível

//////////////////////////////////////////////////////////////////////////////////////////////////////////
// FUNÇÃO PRINCIPAL //////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function quizStart(eletrodoRevestido, language, subjects) {
    console.log("Hey " + language);
    var i;                                                                            // Variável auxiliar
    var questionLevel = questionCurrent(questionNumber, language);                    // array de perguntas
    var aux = questionRandom(questionLevel);                                         // indice da pergunta
    console.log("Entrei com subject " + questionLevel[aux].subject);
    var trials = 0;
    while(!subjects.includes(parseInt(questionLevel[aux].subject)) && trials < 1000) {
        
        aux = questionRandom(questionLevel);
        console.log("entrei");
        trials++;
    }

    console.log("Sai com subject " + questionLevel[aux].subject);

    var auxquestions = document.getElementById("quiz-questions");
    var auxanswers = document.getElementById("quiz-answers");
    var radio = [],
        label = [];
    
    // Desaparece o nome do quiz, e apare a div das perguntas
    document.getElementById("page-name").style.display = "none";
    document.getElementById("credits").style.display = "none";
    document.getElementById("option-box").style.display = "none";
    document.getElementById("quiz-container").style.display = "block";

    // Desaparecimento dos botões de escolha de tempo e do help
    document.getElementById("consumivel").style.display = "none";
    document.getElementById("nao-consumivel").style.display = "none";
    document.getElementById("help").style.display = "none";
    document.getElementById("help-text").style.display = "none";

    // Aparecimento da animação de tempo
    document.getElementById("spark").style.display = "block";

    // Alteração da imagem de fundo
    document.getElementById("story-image").style.backgroundImage = "url('img/stairway.png')";
    document.getElementById("story-image").style.webkitBackgroundSize = "100% 100%";   
    document.getElementById("welder").style.display = "block";
    document.getElementById("darth-vader").style.display = "block";

    // Animação dos nomes dos níveis
    document.getElementById("levels").style.display = "block";
    document.getElementById("level_4").innerHTML = achiev[questionNumber + 1].name;
    document.getElementById("level_1").innerHTML = achiev[questionNumber].name;
    document.getElementById("level_2").innerHTML = achiev[questionNumber - 1].name;    

    // Criação da pergunta
    auxquestions.innerHTML = questionNumber + ". " + questionLevel[aux].question;

    // Loop para a criação das alternativas de reposta
    for (i = 0; i < 4; i++) {
	// Criação do radio button e atribuição do name
        radio[i] = document.createElement("INPUT");
        radio[i].setAttribute("type", "radio");
        radio[i].setAttribute("name", "answers");
        // Anexação do radio button à divisão "quiz-answers"
        auxanswers.appendChild(radio[i]);

        // Criação da label
        label[i] = document.createElement("LABEL");
        // Preenchimento da label com as alternativas
        label[i].innerHTML = " " + questionLevel[aux].answers[i] + "<br />";
        // Anexação da label à divisão "quiz-answers"
        auxanswers.appendChild(label[i]);
    }

    // Início da contagem de tempo
    if (eletrodoRevestido == true) {
        timeLeft();
    }
    else {
        tig();
    }
    
    // Adiciona à tecla "enter" a verificação da resposta
    var botao = function (e) {
        if (e.which == 13) {
            verifyAnswer();
        }
    };

    document.addEventListener("keypress", botao, false);





    /////////////////////////////////////////////////////////////////////////////////////////////////////
    // FUNÇÃO QUE VERIFICA SE A REPOSTA ESCOLHIDA É CORRETA OU NÃO, E EXECUTA AS AÇÕES CORRESPONDENTES //
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    function verifyAnswer() {
        // Verifica se a resposta escolhida é a correta, e não é a última pergunta
        if (radio[questionLevel[aux].correctAnswer].checked == true && questionNumber < 20) {
            // Desmarcar o radio button
            radio[questionLevel[aux].correctAnswer].checked = false;

            // Movimenta as personagens
            moveWelder(-1);
            moveVader(-1);

            questionNumber++;
            questionLevel = questionCurrent(questionNumber, language);                    // array de perguntas
            aux = questionRandom(questionLevel);                                         // indice da pergunta
        
            trials = 0;
            while(!subjects.includes(parseInt(questionLevel[aux].subject)) && trials < 1000) {
                aux = questionRandom(questionLevel);
                trials++;
            }

            // Próxima questão
            levelName();                                        // Animação do nome do nível
                     
            // Criação da pergunta
            auxquestions.innerHTML = questionNumber + ". " + questionLevel[aux].question;

            // Loop para a criação das alternativas de reposta
            for (i = 0; i < 4; i++) {
                label[i].innerHTML = " " + questionLevel[aux].answers[i] + "<br />";
            }

            // Verifica o modo de jogo, para reiniciar a contagem do tempo
            if (eletrodoRevestido == true) {
                timeLeft();
            }
        }
        // Verifica se a respota é incorreta
        else if (radio[questionLevel[aux].correctAnswer].checked == false) {
            quizFinish(false, eletrodoRevestido);                   // Finaliza o quiz com derrota por resposta incorreta
            radioOFF();                                             // Desativa os radio buttons
            document.removeEventListener("keypress", botao, false);
            insertScore();
        }

        // Caso em que a resposta é correta, e a pergunta é a última do quiz
        else {
            quizFinish(true, eletrodoRevestido);                    // Finaliza o quiz com vitória
            radioOFF();                                             // Desativa os radio buttons
            levelName();                                            // Animação do nome do nível
            questionNumber++;                                       // Atualização para indicar vitória (fins de código)
            document.removeEventListener("keypress", botao, false); // Remove a função da tecla "enter"
            insertScore();
        }
    }





    /////////////////////
    // FUNÇÃO DE TEMPO //
    /////////////////////
    function timeLeft() {
        // Dimensões e posição da animação de tempo (para eletrodo revestido)
        var timetop = 205,
            timeleft = 135,
            timewidth = 182,
            timeheight = 80,
            sparktop = 250,
            texttop = 285;    

        var timediv = document.getElementById("time-animation"),
            sparkdiv = document.getElementById("spark"),
            textdiv = document.getElementById("time");

        timediv.style.height = timeheight + "px";           // Altura da div da animação

        t = 60;                                             // Tempo máximo para responder cada pergunta em segundos
        clearTimeout(time);                                 // Cancela instâncias anteriores do tempo (a fim de reinicio)
        timeLeft2();

        function timeLeft2() {
            document.getElementById("time").innerHTML = t.toFixed(1) + " s";
            t += - 1 / 20;

            // Verifica se o tempo esgotou
            if (t < 0) {
                // Declara derrota
                quizFinish(false, eletrodoRevestido);
                radioOFF();
                document.removeEventListener("keypress", botao, false);
                sparkdiv.style.display = "none";
                insertScore();
            }
            else {
                time = setTimeout(function () { timeLeft2() }, 1000/20);

                // Deslocamento da div do tempo
                timetop += 2/20;
                timediv.style.top = timetop + "px";

                // Redução do tamanho da div do tempo
                timewidth += - 1.35/20;
                timediv.style.width = timewidth + "px";

                // Deslocamento da faísca
                sparktop += 2/20;
                sparkdiv.style.top = sparktop + "px";

                // Deslocamento do tempo
                texttop += 2/20;
                textdiv.style.top = texttop + "px";
            }
        }
    }





    /////////////////////////////////
    // Desabilita os radio buttons //
    /////////////////////////////////
    function radioOFF() {
        for (i = 0; i < 4; i++) {
            radio[i].disabled = true;
        }
    }
}

function insertScore() {
    method = "post";

    var form = document.getElementById("optionForm");
    form.setAttribute("method", method);
    form.setAttribute("action", "insertScore.php");

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "score");
    hiddenField.setAttribute("value", questionNumber);

    form.appendChild(hiddenField);

    form.submit();
}