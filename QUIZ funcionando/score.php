<?php 

    class Score {
        public $studentName;
        public $university;
        public $country;
        public $score;
    }

    class Country {
        public $countryName;
        public $count;
    }

    function getScores($conexao){

        $arrayScores = [];

        $sql = "SELECT * FROM scores";

        $result = $conexao->query($sql);

        if(!$result)
            throw new Exception('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conexao->error);

        while($row = $result->fetch( PDO::FETCH_ASSOC )){

            $score = new Score();
            $score->studentName = $row["name"];                
            $score->university = $row["university"];
            $score->country = $row["country"];
            $score->score = $row["score"];

            $arrayScores[] = $score;

        }

        return $arrayScores;
    }

    function getScoresByCountry($conexao) {
        $countries = [];

        $sql = "SELECT country, count(country) as c_count FROM scores GROUP BY country ORDER BY c_count DESC;";

        $result = $conexao->query($sql);

        if(!$result)
            throw new Exception('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conexao->error);

        while($row = $result->fetch( PDO::FETCH_ASSOC )){

            $country = new Country();
            $country->countryName = $row["country"];                
            $country->count = $row["c_count"];

            $countries[] = $country;

        }

        return $countries;
    }

    function getTotal($conexao) {
        $sql = "SELECT count(country) as total FROM scores;";
        $result = $conexao->query($sql);
        if(!$result)
            throw new Exception('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conexao->error);
        return $result->fetch( PDO::FETCH_ASSOC )['total'];
    }
?>