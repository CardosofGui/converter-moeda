<?php 

    $servidor = "localhost";
    $bdName = "bdconversormoeda";
    $usuario = "root";
    $senha = "";

    $conn = new PDO("mysql:host=$servidor;dbname=$bdName",$usuario,$senha);

?>