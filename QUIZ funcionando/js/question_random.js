﻿/////////////////////////////////////////////////////////////////////////////////////////
////---------------------------------------------------------------------------------////
////---- GERA UM NÚMERO ALEATÓRIO PARA SELECIONAR UMA QUESTÃO DENTRO DE UM NÍVEL ----////
////---------------------------------------------------------------------------------////
/////////////////////////////////////////////////////////////////////////////////////////

function questionRandom(questionLevel) {
    var aux;
    aux = Math.floor(Math.random() * questionLevel.length);
    return aux;
}