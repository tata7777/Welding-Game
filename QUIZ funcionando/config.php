<?php
    $dbHost = 'Localhost'; /* Local Hospedado */
    $dbUsername = 'root'; /* Nome do user, na maioria das vezes é root */
    $dpPassword = 'weldinggame!1707';/*Senha se houver*/ 
    $dbName= 'formulario'; /*Nome do Banco de Dados */
    
    $conexao = new mysqli( $dbHost,$dbUsername,$dpPassword, $dbName);
    //como eu acho que deveria ser 
    //$conexao = new mysqli( $dbHost,$dbUsername,$dpPassword, $dbName, $dbLanguage, $dbScore, $dbData);
    
    /*testar conexão
    if($conexao-> connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }*/
     
?>