<?php


$dsn = "mysql:
        host=localhost;
        dbname=quizzer2;
        user=root;
        password=;
";

$conn = new PDO($dsn);

$results = $conn->query("SELECT * FROM `scores` ORDER BY `scores`.`time` ASC")
                ->fetchAll();
                
header('Content-type: json');
echo json_encode($results);