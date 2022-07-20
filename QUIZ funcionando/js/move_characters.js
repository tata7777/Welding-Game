/////////////////////////////////////////////////////////
////-------------------------------------------------////
////---- FUNÇÕES DE MOVIMENTAÇÃO DAS PERSONAGENS ----////
////-------------------------------------------------////
/////////////////////////////////////////////////////////

var weldertop = 275,                                        // Posicionamento vertical do soldador
    welderleft = 930,                                       // Posicionamento horizontal do soldador
    welderwidth = 45;                                       // Largura do soldador (na saída)
    /*vadertop = 330,                                       // Posicionamento vertical do Darth Vader
    vaderleft = 808,                                        // Posicionamento horizontal do Darth Vader
    vaderheight = 77; */                                    // Altura do Darth Vader

//////////////////////////////
// MOVIMENTAÇÃO DO SOLDADOR //
//////////////////////////////
function moveWelder(x) {                                    // x == 1 DERROTA; x == -1 VITÓRIA / RESPOTA CORRETA
    var posW = document.getElementById("welder");
    var pos = 0,                                            // Variável para contar 1 degrau deslocado
        speedW;                                             // Velocidade de desloamento do soldador

    if (x == 1) {                                           // Verifica se é derrota, para ajustar o sentido do soldador
        // Ajustes da posição do soldador
        // virar o personagem para sair e ajeitar a posição de saida
        //document.getElementById("welder").style.display = "none";
        /*welderleft += 19;
        posW.style.left = welderleft + "px";

        speedW = 10;*/
    }
    else {
        document.getElementById("nuvem20").style.display = "none";
        speedW = 60;
    }
// lembrar de tirar o dather welder
    var slowMotionW = setInterval(frameWelder, speedW);     // Tempo em milisegundos

    function frameWelder() {
        if ((pos == 30 && x == - 1) || welderleft >= 1100) {
            if(questionNumber== 2){ 
            posW.style.backgroundImage = "url('img/nivel2.png')"; /*troca de personagens após acertar uma questão*/
            document.getElementById("nuvem1").style.display = "none";
            //width: 117px;
            //height: 126px;
        }
            if(questionNumber== 3) {
            posW.style.backgroundImage = "url('img/nivel3.png')";    
            document.getElementById("nuvem2").style.display = "none";
            posW.style.width="107px";
            posW.style.height="131px";
        }
            if(questionNumber== 4) {
            posW.style.backgroundImage = "url('img/nivel4.png')";    
            document.getElementById("nuvem3").style.display = "none";
        }
            if(questionNumber== 5) {
            posW.style.backgroundImage = "url('img/nivel5.png')";    
            document.getElementById("nuvem4").style.display = "none";
        }
            if(questionNumber== 6) {
            posW.style.backgroundImage = "url('img/nivel6.png')";    
            document.getElementById("nuvem5").style.display = "none";
            posW.style.width="96px";
            posW.style.height="127px";
        }
            if(questionNumber== 7) {
            posW.style.backgroundImage = "url('img/nivel7.png')";    
            document.getElementById("nuvem6").style.display = "none";
            posW.style.width="90px";
            posW.style.height="127px";
            }
            if(questionNumber== 8) {
            posW.style.backgroundImage = "url('img/nivel8.png')";  
            document.getElementById("nuvem7").style.display = "none";
            posW.style.width="96px";
            posW.style.height="127px";
            }
            if(questionNumber== 9) {
            posW.style.backgroundImage = "url('img/nivel9.png')";  
            document.getElementById("nuvem8").style.display = "none"; 
            }
            if(questionNumber== 10) {
            posW.style.backgroundImage = "url('img/nivel10.png')";   
            document.getElementById("nuvem9").style.display = "none"; 
            posW.style.width="101px";
            posW.style.height="124px";
            }
            if(questionNumber== 11) {
            posW.style.backgroundImage = "url('img/nivel11.png')";    
            document.getElementById("nuvem10").style.display = "none";
            }
            if(questionNumber== 12) {
            posW.style.backgroundImage = "url('img/nivel12.png')";   
            document.getElementById("nuvem11").style.display = "none"; 
            }
            if(questionNumber== 13) {
            posW.style.backgroundImage = "url('img/nivel13.png')";    
            document.getElementById("nuvem12").style.display = "none";
            posW.style.width="106px";
            posW.style.height="134px";
        }
            if(questionNumber== 14) {
            posW.style.backgroundImage = "url('img/nivel14.png')";    
            document.getElementById("nuvem13").style.display = "none";
            posW.style.width="107px";
            posW.style.height="131px";
        }
            if(questionNumber== 15) {
            posW.style.backgroundImage = "url('img/nivel15.png')";    
            document.getElementById("nuvem14").style.display = "none";
            posW.style.width="103px";
            posW.style.height="129px";
        }
            if(questionNumber== 16) {
            posW.style.backgroundImage = "url('img/nivel16.png')";            
            document.getElementById("nuvem15").style.display = "none";
            posW.style.width="107px";
            posW.style.height="121px";
        }
            if(questionNumber== 17) {
            posW.style.backgroundImage = "url('img/nivel17.png')";    
            document.getElementById("nuvem16").style.display = "none";
            posW.style.width="97px";
            posW.style.height="123px";
        }
            if(questionNumber== 18) {
            posW.style.backgroundImage = "url('img/nivel18.png')";    
            document.getElementById("nuvem17").style.display = "none";
            
        }
            if(questionNumber== 19) {
            posW.style.backgroundImage = "url('img/nivel19.png')";    
            document.getElementById("nuvem18").style.display = "none";
            posW.style.width="90px";
 
        }
            if(questionNumber== 20) {
            posW.style.backgroundImage = "url('img/nivel20.png')";    
            document.getElementById("nuvem19").style.display = "none";
            posW.style.width="107px";
            posW.style.height="131px";
        }
            clearInterval(slowMotionW);
        }
        if(x == 1) { // colocar o fede out e/ou o som do balão estourando
            document.getElementById("welder").style.display = "none";
        }
        else { // isso que faz descer?
            //welderwidth = 15;
            //await delay(5);
            
            //document.getElementById("welder").style.display = "none";
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