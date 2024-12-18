<?php


$dsn = "mysql:
        host=localhost;
        dbname=quizzer2;
        user=root;
        password=;
";

$conn = new PDO($dsn);

$name = $_GET['name'];
$score = $_GET['score'];
$time = $_GET['time'];

$conn->query("INSERT INTO `scores` (`id`, `name`, `score`, `date`, `time`) VALUES (NULL, '$name', '$score', current_timestamp(), '$time');");