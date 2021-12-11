<?php
$texte=$_GET["texte"];

 $texte = htmlspecialchars($texte);

print "Voici le résultat : ".$texte;
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Test</h1>
<form type="get" action="">
    <input type="text" name="texte" id="texte">
    <input type="submit" value="go !">
</form>
</body>
</html>