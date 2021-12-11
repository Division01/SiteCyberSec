<?php
session_start();


if($_SESSION['auth'] === "2"){
    print("Bonjour ". $_SESSION["login"]);
    print "<br/>";
    print "Ce que vous lisez est confidentiel, mais vous êtes affilié donc ça va";
} elseif($_SESSION['auth'] === "1"){
    print("Bonjour ". $_SESSION["login"]);
    print "<br/>";
    print "Vous êtes connecté, mais vous ne possédez pas les droits pour lire le contenu de cette page";
} else {
    print "Vous n'êtes pas connectés, veuillez vous connecter pour accéder a cette page.";
}

