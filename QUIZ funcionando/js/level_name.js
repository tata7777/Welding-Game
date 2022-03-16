//////////////////////////////////////////////////////////
////--------------------------------------------------////
////---- CONTROLA A ANIMAÇÃO DOS NOMES DOS NÍVEIS ----////
////--------------------------------------------------////
//////////////////////////////////////////////////////////

function levelName() {
    var bottom_1 = 8,
        bottom_2 = 21,
        bottom_3 = 34,
        bottom_4 = 93;
    var pos = 0;
    var aux = setInterval(changeName, 50);
    var blaw_1 = document.getElementById("level_1"),
        blaw_2 = document.getElementById("level_2"),
        blaw_3 = document.getElementById("level_3"),
        blaw_4 = document.getElementById("level_4");

    function changeName() {
        if (pos == 35) {                                            // 37px (altura do retângulo) - 2px (borda)
            clearInterval(aux);

            bottom_1 = 8,
            bottom_2 = 21,
            bottom_3 = 34,
            bottom_4 = 93;

            blaw_1.style.top = bottom_1 + "px";
            blaw_2.style.top = bottom_2 + "px";
            blaw_3.style.top = bottom_3 + "px";
            blaw_4.style.bottom = bottom_4 + "px"; 

            blaw_3.innerHTML = blaw_2.innerHTML;
            blaw_2.innerHTML = blaw_1.innerHTML;
            blaw_1.innerHTML = blaw_4.innerHTML;
            blaw_4.innerHTML = achiev[questionNumber + 1].name;
        }
        else {
            pos++;

            bottom_1 += + 1;
            bottom_2 += + 1;
            bottom_3 += + 1;
            bottom_4 += - 1;

            blaw_1.style.top = bottom_1 + "px";
            blaw_2.style.top = bottom_2 + "px";
            blaw_3.style.top = bottom_3 + "px";
            blaw_4.style.bottom = bottom_4 + "px"; 
        }
    }
}