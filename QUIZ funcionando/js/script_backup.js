// Eletrodo não-consumível
function startNaoCons() {
    quizStart(questionRandom(), false);

    // Adiciona a imagem de um eletrodo não consumível
    document.getElementById("time-animation").style.backgroundImage = "url('img/newCandle.jpg')";
}

// Eletrodo consumível
function startCons() {
    quizStart(questionRandom(), true);

    // Adiciona o gif que indica o tempo para responder a pergunta
    document.getElementById("time-animation").style.backgroundImage = "url('img/candle.gif')";
}

// Gera um número aleatório para selecionar uma questão dentro de um nível
function questionRandom() {
    var aux;
    aux = Math.floor(Math.random() * quizQuestions1.length);
    return aux;
}

// Cria o quiz e manipula seu ambiente
function quizStart(aux, timer) {
    // Desaparecimento dos botões de escolha de tempo e do help
    document.getElementById("consumivel").style.display = "none";
    document.getElementById("nao-consumivel").style.display = "none";
    document.getElementById("help").style.display = "none";

    // Alteração da imagem de fundo
    document.getElementById("story-image").style.backgroundImage = "url('img/Obiwanvaderanhduel.jpg')";

    // Declaração de variáveis
    var radio = [],
        label = [];
    var i,
        aux2 = aux,
        questionNumber = 1;

    // Criação da pergunta
    document.getElementById("quiz-questions").innerHTML = quizQuestions1[aux].question;

    // Loop para a criação das alternativas de reposta
    for (i = 0; i < 4; i++) {
        // Criação do radio button e atribuição do name
        radio[i] = document.createElement("INPUT");
        radio[i].setAttribute("type", "radio");
        radio[i].setAttribute("name", "answers");
        // Anexação do radio button à divisão "quiz-answers"
        document.getElementById("quiz-answers").appendChild(radio[i]);

        // Criação da label
        label[i] = document.createElement("LABEL");
        // Preenchimento da label com as alternativas
        label[i].innerHTML = " " + quizQuestions1[aux].answers[i] + "<br />";
        // Anexação da label à divisão "quiz-answers"
        document.getElementById("quiz-answers").appendChild(label[i]);
    }

    // Início do timer
    if (timer == true) {
        timeLeft();
    }

    // Botão para confirmar as repostas
    var button = document.createElement("button");
    button.innerHTML = "P<br />R<br />Ó<br />X<br />I<br />M<br />A";
    button.setAttribute("id", "nextbutton");
    document.getElementById("button-container").appendChild(button);
    // Aparência do botão
    document.getElementById("nextbutton").style.height = "120px";
    document.getElementById("nextbutton").style.width = "40px";

    // Adiciona ao botão um evento que será acionado pelo click
    document.getElementById("nextbutton").addEventListener("click", function () {
        nextQuestion();
    });

    // Adiciona à tecla "enter" a função do nextbutton
    document.addEventListener("keypress", function (e) {
        if (e.which == 13) {
            nextQuestion();
        }
    }, false);

    function nextQuestion() {
        // Verifica se a resposta escolhida é a correta
        if (radio[quizQuestions1[aux2].correctAnswer].checked == true) {
            // Desmarcar o radio button
            radio[quizQuestions1[aux2].correctAnswer].checked = false;

            // Próxima questão
            questionNumber++;
            aux2 = questionRandom();

            // Criação da pergunta
            document.getElementById("quiz-questions").innerHTML = quizQuestions1[aux2].question;

            // Loop para a criação das alternativas de reposta
            for (i = 0; i < 4; i++) {
                label[i].innerHTML = " " + quizQuestions1[aux2].answers[i] + "<br />";
            }

            document.getElementById("page-name").innerHTML = time;
            // Verifica o modo de jogo, para reiniciar a contagem do tempo
            if (timer == true) {
                timeLeft();

                // Reinicia o gif que indica o tempo para responder a pergunta
                if (questionNumber%2 == 0) {
                    document.getElementById("time-animation").style.backgroundImage = "url('img/candle.gif')";
                    document.getElementById("page-name").innerHTML = "blaw1";
                }
                else {
                    document.getElementById("time-animation").style.backgroundImage = "url('img/candle2.gif')";
                    document.getElementById("page-name").innerHTML = "blaw2";
                }
            }
        }
        else {
            // Desabilita os radio buttons e o nextbutton
            for (i = 0; i < 4; i++) {
                radio[i].disabled = true;
            }
            document.getElementById("nextbutton").disabled = true;
        }    
    }

    // Função de tempo
    function timeLeft() {
        // Tempo máximo para responder cada pergunta em segundos
        var t = 60;

        clearTimeout(time);
        timeLeft2();

        function timeLeft2() {
            document.getElementById("time-animation").innerHTML = "Tempo Restante: " + t + " s";
            t--;

            // Verifica se o tempo esgotou
            if (t < 0) {
                document.getElementById("time-animation").style.backgroundImage = "url('img/burntCandle.jpg')";

                // Desabilita os radio buttons e o nextbutton
                for (i = 0; i < 4; i++) {
                    radio[i].disabled = true;
                }
                document.getElementById("nextbutton").disabled = true;
            }
            else {
                time = setTimeout(function () { timeLeft2() }, 1000);
            }
        }
    }
}