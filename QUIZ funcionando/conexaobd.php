<?php

// define("HOST", "localhost"); 
// define("USER", "quiz");
// define("PASSWORD", "qu1zs0ldagem"); 
// define("DATABASE", "quiz_soldagem");

function conectabd()
{
  // $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
  // if ($conn->connect_error){
  //   throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);
  // }
    

  // return $conn;

  $db = new PDO('sqlite:scores.sqlite', '', '', array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ));
  if (!$db) {
    $error = (file_exists('scores.sqlite')) ? "Impossible to open, check permissions" : "Impossible to create, check permissions";
    die($error);
  }
  $db->query("CREATE TABLE IF NOT EXISTS scores (name varchar(80), university varchar(80), country varchar(80), score integer)");
  return $db;
}

?>