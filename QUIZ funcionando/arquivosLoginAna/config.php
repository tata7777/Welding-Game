<?php
    $dbHost = 'LocalHost'; /* Local Hospedado */
    $dbUsername = 'root'; /* Nome do user, na maioria das vezes é root */
    $dpPassword = '';/*Senha se houver*/ 
    $dbName= 'formulario'; /*Nome do Banco de Dados */
    
    $conexao = new mysqli( $dbHost,$dbUsername,$dpPassword, $dbName)
    
    /*testar conexão
    if($conexao-> connect_erro){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso"
    }
    } */
?>