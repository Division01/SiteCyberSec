<?php

session_start();
$login=$_GET["login"];
$pwd=$_GET["pwd"];

$mysqli = new mysqli("127.0.0.1", "root", "", "ecam");

### SQL Injection possible atm
$safe_login = mysqli_real_escape_string($mysqli, $login);
# SQL injection plus possible sur login mais possible sur mdp
##$safe_pwd = mysqli_real_escape_string($mysqli, $pwd);

$query = 'SELECT * FROM user where login="'.$safe_login.'" AND password="'.$pwd.'"';
print($query);
print "<br/>";
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
    print "<br/><a href='Admin.php'>Accéder a la page Admin</a>";
}
