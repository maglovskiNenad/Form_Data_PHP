<?php

$username = $_POST["username"];
$password = $_POST["password"];
$min = 5;
$max = 10;

$names = ["Branislava", "Nenad", "Marko", "Ivana", "Aleksandra", "Tanja", "Igor", "Srdjan", "Ilija", "Dragutin"];


if (!isset($username, $names)) {
    echo "</br>";
    echo "Sorry but you are not allowed!";
} else {
    echo "Welcome" . " " . $username;
}

if (strlen($username) < $min || strlen($username) > $max) {
    echo "</br>";
    echo "Sorry your username should have more then 5 or less then 10 caracters.";
}

if (strlen($password) < $min || strlen($password) > $max) {
    echo "</br>";
    echo "Sorry your password should have more then 5 or less then 10 caracters.";
}



?>

<!--isset() Determine if a variable is considered set, this means if a variable is declared and is different than null. -->
<!-- $_POST is a PHP super global variable which is used to collect form data after submitting 
    an HTML form with method="post". $_POST is also widely used to pass variables. -->