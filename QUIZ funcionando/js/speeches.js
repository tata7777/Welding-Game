///////////////////////////////////////////////////////////////
////-------------------------------------------------------////
////---- FUNÇÕES DE CONTROLE DAS FALAS DAS PERSONAGENS ----////
////-------------------------------------------------------////
///////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////
// FUNÇÃO QUE CONTROLA DA FALA DO DARTH VADER NO FIM DO QUIZ //
///////////////////////////////////////////////////////////////
function dvSpeech(victory) {
    var vaderSpeech = document.getElementById("dv-speech");

    // Posição horizontal do balão de fala do DV
    var speechleft = vaderleft + 12;
    vaderSpeech.style.left = speechleft + "px";

    // Carrega o balão de fala do Darth Vader
    vaderSpeech.style.display = "block";
    vaderSpeech.style.backgroundImage = "url('img/speech-balloon.png')";
    vaderSpeech.style.webkitBackgroundSize = "100% 100%";

    if (victory == true) {              // Vitória do jogador
        vaderSpeech.innerHTML = "NOOOOOOOOOOOOOOOO- OOOOOOOOOOOOOOOO! <br> <i>I'LL BE BACK!</i>";
        moveVader(1);
    }
    else {
        // Posição vertical do balão de fala do DV
        var speechtop = vadertop - 110;
        vaderSpeech.style.top = speechtop + "px";

        if (t > 0) {                    // Derrota do jogador por resposta incorreta
            vaderSpeech.innerHTML = "Resposta incorreta. Estude mais para ser um " + achiev[questionNumber].name + "!";
        }
        else {                          // Derrota do jogador por tempo esgotado
            vaderSpeech.innerHTML = "Seu \"eletrodo revestido\" acabou. Estude mais para ser um " + achiev[questionNumber].name + "!";
        }
    }
}