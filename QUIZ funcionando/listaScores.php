<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Quiz Da Soldagem">
    <meta name="keywords" content="">
    <meta name="author" content="Kauê Oliveira Drigo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
    
    <link href="style/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php

require "conexaobd.php"; //inclui arquivo com os dados e funções de conexão
require "score.php";

$arrayAgenda = "";
$arrayCountries = [];
$total = "";
$erro = "";	

try{

	$conexao = conectabd();
    $arrayScores = getScores($conexao);
    $arrayCountries = getScoresByCountry($conexao);
    $total = getTotal($conexao);

    usort($arrayScores, function($a, $b) 
    {
        return $a->score < $b->score;
    });

}catch(Exception $e){

	$erro = $e->getMessage();
}

?>

<body>
    <h2 class="listagens">TOTAL DE PARTICIPANTES:</h2>
    <?php
        echo "<h2 class='bigTotal'>$total</h2>"
    ?>
    <div class="container lista">	  
        <h2 class="listagens">SCORES</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="tabelalistagens">
                                <th>Nome</th>
                                <th>Universidade</th>
                                <th>País</th>
                                <th>Nível Máximo</th>
                            </tr>
                        </thead>
                        
                    <tbody>
                        <?php
                        
                            if ($arrayScores != "")
                            {
                            
                                    foreach ($arrayScores as $score)
                                    {       
                                        echo "
                                        <tr>
                                        <td>$score->studentName</td>
                                        <td>$score->university</td>
                                        <td>$score->country</td>
                                        <td>$score->score</td>     
                                        </tr>      
                                        ";
                                    }
                            }
                            
                        ?>    
                        
                    </tbody>
                    </table>

                
                <!-- <?php
                
                if ($erro != "")
                    echo "<p class='text-danger'>A operação não pode ser realizada: $erro</p>";
                
                ?> -->
            </div>
        </div>

    <div class="container lista">	  
    <h2 class="listagens">PAISES</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="tabelalistagens">
                            <th>País</th>
                            <th>Participantes</th>
                        </tr>
                    </thead>
                    
                <tbody>
                    <?php
                    
                        if ($arrayCountries != "")
                        {
                        
                                foreach ($arrayCountries as $country)
                                {       
                                    echo "
                                    <tr>
                                    <td>$country->countryName</td>
                                    <td>$country->count</td>
                                    </tr>      
                                    ";
                                }
                        }
                        
                    ?>    
                    
                </tbody>
                </table>

            
            <!-- <?php
            
            if ($erro != "")
                echo "<p class='text-danger'>A operação não pode ser realizada: $erro</p>";
            
            ?> -->
        </div>
    </div>
</body>