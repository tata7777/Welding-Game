/////////////////////////////////////////////////////////
////-------------------------------------------------////
////---- FUNÇÕES DE MOVIMENTAÇÃO DAS PERSONAGENS ----////
////-------------------------------------------------////
/////////////////////////////////////////////////////////

var weldertop = 326,                                        // Posicionamento vertical do soldador
    welderleft = 840,                                       // Posicionamento horizontal do soldador
    welderwidth = 45,                                       // Largura do soldador (na saída)
    vadertop = 330,                                         // Posicionamento vertical do Darth Vader
    vaderleft = 808,                                        // Posicionamento horizontal do Darth Vader
    vaderheight = 77;                                       // Altura do Darth Vader

//////////////////////////////
// MOVIMENTAÇÃO DO SOLDADOR //
//////////////////////////////
function moveWelder(x) {                                    // x == 1 DERROTA; x == -1 VITÓRIA / RESPOTA CORRETA
    var posW = document.getElementById("welder");
    var pos = 0,                                            // Variável para contar 1 degrau deslocado
        speedW;                                             // Velocidade de desloamento do soldador

    if (x == 1) {                                           // Verifica se é derrota, para ajustar o sentido do soldador
        // Ajustes da posição do soldador
        posW.style.backgroundImage = "url('img/welder2.png')";
        posW.style.width = "45px";
        welderleft += 19;
        posW.style.left = welderleft + "px";

        speedW = 10;
    }
    else {
        speedW = 60;
    }

    var slowMotionW = setInterval(frameWelder, speedW);     // Tempo em milisegundos

    function frameWelder() {
        if ((pos == 30 && x == - 1) || welderleft >= 1100) {
            clearInterval(slowMotionW);
        }
        else {
            pos++;
            welderleft += x * 35 / 30;
            posW.style.left = welderleft + "px";
            
            if (weldertop < 326.1 || x == -1) {             // O soldador desce, no máximo, até o último degrau
                weldertop += x * 14 / 30;
                posW.style.top = weldertop + "px";
            }

            if (welderleft >= 1055) {                       // Desaparecimento do soldador quando atinge o fim da div
                welderwidth += - 35 / 30;
                posW.style.width = welderwidth + "px";
            }
        }
    }
}

///////////////////////////////////////////////////////
// MOVIMENTAÇÃO DO DARTH VADER (E SEU BALÃO DE FALA) //
///////////////////////////////////////////////////////
function moveVader(y) {                                     // y == 1 DERROTA; y == -1 RESPOTA CORRETA
    var posDV = document.getElementById("darth-vader");
    var pos = 0,                                            // Variável para contar 1 degrau deslocado                                          
        speedV,                                             // Velocidade de desloamento do Darth Vader
        speechtop = 0;                                      

    if (y == -1) {
        speedV = 60;
    }
    else {
        var degrees = 180,
            tempo = setInterval(girar, 20);
        function girar() {
            if (degrees > 0) {
                posDV.style.transform = "rotate("+degrees+"deg)";
                degrees -= 2;                               // Velocidade de giro
            }
            else {
                clearInterval(tempo);
            }
        }

        speedV = 20;
    }

    var slowMotionV = setInterval(frameVader, speedV);      // Tempo em milisegundos

    function frameVader() {
        if ((pos == 30 && y == - 1) || vadertop >= 450) {
            clearInterval(slowMotionV);
        }
        else {
            pos++;
            vadertop += y * 14 / 30;
            posDV.style.top = vadertop + "px";
          
            if (y == -1) {                                  // O Darth Vader só se movimenta horizontalmente na subida
                vaderleft += y * 35 / 30;
                posDV.style.left = vaderleft + "px";
            }

            if (vadertop >= 363) {                          // Desaparecimento do Darth Vader quando atinge o fim da div
                vaderheight += - 14 / 30;
                posDV.style.height = vaderheight + "px";
            }

            if (y == 1 && speechtop <= 320) {
                speechtop = vadertop - 110;
                document.getElementById("dv-speech").style.top = speechtop + "px";
            }
        }
    }
}