<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "ecam");
$query = 'SELECT * FROM user';

$result = $mysqli->query($query);

$len = $result->num_rows;

// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach (range(0, $len) as $number) {
    var_dump('Utilisateur numéro '.$number);
    var_dump($result->fetch_assoc());
}

// $row = $result->fetch_assoc();
// var_dump($row);

// $result -> fetch_all();
// var_dump($result);