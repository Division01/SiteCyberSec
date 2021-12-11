<?php

session_start();
# Il doit etre cree par contre
$login="guest_account";
$pwd="pwd_for_the_guest_account_2021_2022";

$mysqli = new mysqli("127.0.0.1", "root", "", "ecam");
$query = 'SELECT * FROM user where login="'.$login.'" AND password="'.$pwd.'"';

print "<br/>";

$result = $mysqli->query($query);

if(!$result){
    die("error sql");
}

if($result->num_rows === 0){
    print "Identifiants incorrects";

} else {
    $row = $result->fetch_assoc();
    print ('Bonjour ');
    print $row["login"];
    $_SESSION["auth"] = $row["admin"];
    $_SESSION["login"] = $row["login"];
    

    print "<br/>";
    print "<br/><a href='/ecam/Admin.php'>Accéder a la page Admin</a>";
}
