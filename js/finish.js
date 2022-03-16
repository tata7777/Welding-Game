///////////////////////////////////////////////////////////
////---------------------------------------------------////
////---- FUNÇÕES DE FINALIZAÇÃO E REINICIO DO QUIZ ----////
////---------------------------------------------------////
///////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
// FINALIZAÇÃO DO JOGO COM AÇÕES DIFERENTES PARA VITÓRIA E DERROTA DO JOGADOR //
////////////////////////////////////////////////////////////////////////////////
function quizFinish(victory, timeON) {
    // Para de contar o tempo, se aplicável
    if (timeON == true) {                   // Verifica se o modo de jogo é "ELETRODO REVESTIDO"
        clearTimeout(time);                 // Pausa a contagem de tempo
    }

    if (victory == true) {                  // Vitória do jogador
        moveWelder(-1);                     // O soldador avança o último degrau
        dvSpeech(true);                     // Darth Vader sai de cena
    }
    else {                                  // Derrota do jogador
        moveWelder(1);                      // O soldador desce a escada e sai de cena
        dvSpeech(false);                    // Darth Vader repreende o soldador
    }   

    // Dá opção para reiciniar o quiz
    setTimeout(function () { restartQuiz(); }, questionNumber * 400 + 1600);
}

/////////////////////////////////////////
// CRIA UM BOTÃO PARA REINICIAR O QUIZ //
/////////////////////////////////////////
function restartQuiz() {
    var Wspeech = document.getElementById("welder-speech");

    // Carrega o balão de fala
    Wspeech.style.backgroundImage = "url('img/speech-balloon-2.png')";
    Wspeech.style.webkitBackgroundSize = "100% 100%";

    // Insere um link para reiniciar o quiz
    var element = document.createElement("a");
    element.setAttribute("href", "index.html");
    //element.innerHTML = "='( <br /> Posso tentar novamente...?";
    element.style.textDecoration = "none";
    element.style.color = "red";
    Wspeech.appendChild(element);

    if (questionNumber <= 20) {
        element.innerHTML = ":( <br /> Posso tentar novamente...?";
    }
    else {
        element.innerHTML = "=D <br /> Que tal mais uma...?";
        Wspeech.style.backgroundImage = "url('img/speech-balloon.png')";
        Wspeech.style.paddingLeft = "30px";
        Wspeech.style.left = "200px";
        Wspeech.style.top = "3px";
    }
}