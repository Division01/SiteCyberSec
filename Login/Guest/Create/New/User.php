<?php


session_start();

#Si la personne est connenctee
if (isset($_SESSION["auth"]))
{
    print("Bonjour ". $_SESSION["login"]);
    print "<br/>";
    # Si il y a un username et password dans l'url (pas creer un user vide)
    if($_GET["Username"] != null and $_GET["Password"] != null){
    $login=$_GET["Username"];
    $pwd=$_GET["Password"];

    // Create connection
    $conn = new mysqli("127.0.0.1", "root", "", "ecam");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user (login, password, admin) VALUES ('".$login."','".$pwd."',2)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    print "<br/><a href='/ecam/login.html'>Vous pouvez maintenant vous connecter</a>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
    # User vide on cree pas
    else{
        print("Il n'y a pas (assez) d'arguments.");
    }
}
else
{
    print("Vous ne possédez pas les droits nécessaires pour créer un nouveau compte.");
}
?>