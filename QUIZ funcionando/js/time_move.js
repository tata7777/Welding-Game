/////////////////////////////////////////////////
// MOVIMENTAÇÃO DA ANIMAÇÃO DE TEMPO ILIMITADO //
/////////////////////////////////////////////////
function tig() {
    var timetop = 185,
        sparktop = 200;

    var timediv = document.getElementById("time-animation"),
        sparkdiv = document.getElementById("spark");

    var auxtig = setInterval(tigMove, 1000/60);

    function tigMove() {
        if (timetop > 324) {                                    // Movimenta até chegar ao limite da div
            clearInterval(auxtig);
            sparkdiv.style.display = "none";
        }
        else {
            // Deslocamento da tocha
            timetop += 0.015;
            timediv.style.top = timetop + "px";

            // Deslocamento da faísca
            sparktop += 0.015;
            sparkdiv.style.top = sparktop + "px";
        }
    }
}