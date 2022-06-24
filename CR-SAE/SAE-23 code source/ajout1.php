<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>AJOUT Donnée</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="test.css">
  <script src="script.js"></script>
</head>
<body>

<nav class="menu">

    <a href="accueil.php" class="menu-item">ACCUEIL</a>
    <a href="ajout.php" class="menu-item">AJOUT</a>
    <a href="#" class="menu-item">SUPPRIMER</a>
    <a href="#" class="menu-item">LISTER</a>
    <a href="#" class="menu-item">CLASSER</a>
    <a href="#" class="menu-item">ALEATOIRE</a>
    <a href="#" class="menu-item">CONNEXION</a>

</nav>

<div id="div1">

    <p id="titre">Saisir des informations</p>
    <p id="desc">Les champs non renseignés auront une valeur par défaut</p> 
    
    <form id="monForm" action="ajout1.php" method="get">
        
            <p>
                <label for="form_login">Marque</label>
                <input type="text" name="MARQUE" placeholder="Marque"/>
            </p>
            <p>
                <label for="form_password">Modele</label>
                <input type="text" name="MODELE" placeholder="Modele"/>
            </p>
            <p>
                <label for="form_password2">Cylindree</label>
                <input type="text" name="CYLINDREE" placeholder="Cylindree"/>
            </p>
            <p>
                <label for="form_mail">Puissance</label>
                <input type="text" name="PUISSANCE" placeholder="Puissance"/>
            </p>
            <p>
                <label for="form_question">Couple</label>
                <input type="text" name="COUPLE" placeholder="Couple"/>
            </p>
            <p>
                <label for="form_response">Consomation</label>
                <input type="text" name="CONSOMATION" placeholder="Consomation"/>
            </p>
            <p>
                <label for="form_response">Poids</label>
                <input type="text" name="POIDS" placeholder="Poids"/>
            </p>
            <p>
                <label for="form_response">Carburant</label>
                <input type="text" name="CARBURANT" placeholder="Carburant"/>
            </p>
            <p>
                <label for="form_response">Transmission</label>
                <input type="text" name="TRANSMISSION" placeholder="Transmission"/>
            </p>
        </fieldset>
        
        <div id="div2">
            <input type="submit" name="submit" />
            <input type="reset" name="reset" /> 
        </div>

    </form> 

</div>

<?php

    try
    {
        // On se connecte à MySQL
        $mysqlClient = new PDO('mysql:host=localhost;dbname=db_CAPPELLE;charset=UTF8','22103661','Jean-christophe',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    
    echo 'Connexion réussie';

    if ( isset( $_GET['submit'] ) ) {

        $MARQUE = $_GET['MARQUE'];
        $MODELE = $_GET['MODELE'];
        $CYLINDREE = $_GET['CYLINDREE'];
        $PUISSANCE = $_GET['PUISSANCE'];
        $COUPLE = $_GET['COUPLE'];
        $CONSOMATION = $_GET['CONSOMATION'];
        $POIDS = $_GET['POIDS'];
        $CARBURANT = $_GET['CARBURANT'];
        $TRANSMISSION = $_GET['TRANSMISSION'];

        echo '<h3>Informations récupérées en utilisant GET</h3>'; 
        echo "Champ 1 : " . $MARQUE . "Champ 2 : " . $MODELE . "Champ 3 : " . $CYLINDREE . "Champ 4 : " . $PUISSANCE . "Champ 5 : " . $COUPLE . "Champ 6 : " . $CONSOMATION . "Champ 7 : " . $POIDS . "Champ 8 : " . $CARBURANT . "Champ 9 : " . $TRANSMISSION . "</br>";
    
        $AJOUT = "INSERT INTO `DBVOITURE` (`ID`, `MARQUE`, `MODELE`, `CYLINDREE`, `PUISSANCE`, `COUPLE`, `CONSOMATION`, `POIDS`, `CARBURANT`, `TRANSMISSION`) VALUES (NULL, '". $MARQUE . "', '" . $MODELE . "', '" . $CYLINDREE . "', '" . $PUISSANCE . "', '" . $COUPLE . "', '" . $CONSOMATION . "', '" . $POIDS . "', '" . $CARBURANT . "', '" . $TRANSMISSION . "');";
        echo $AJOUT;

        $insert = $mysqlClient->prepare($AJOUT);
        $insert->execute();
    }

?>

</body>
</html>