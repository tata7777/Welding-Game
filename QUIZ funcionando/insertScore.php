<?php
require "conexaobd.php";

function filtraEntrada($dado){

    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
  
    return $dado;
}

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["studentName"]) && isset($_POST["university"]) && isset($_POST["country"]) && isset($_POST["score"])){

    $erro = "";

    $studentName = $university = $country = "";

    $studentName = filtraEntrada($_POST["studentName"]);
    $university = filtraEntrada($_POST["university"]);
    $country = $_POST["country"];
    $score = $_POST["score"];
    
    try{

        $conexao = conectabd();
        
        $sql = "INSERT INTO scores( name, country, university, score ) 
        VALUES ('$studentName','$country','$university','$score')"; 

        if(! $conexao->query($sql)) {
            throw new Exception ("Falha na inserção dos dados: " . $conexao->error);
        }           

        $formProcSucesso = true;

    }catch(Exception $e) {        
        $erro = $e->getMessage();
        echo '<script type="text/javascript">alert("'.$erro.'");</script>';
    }

}
?>