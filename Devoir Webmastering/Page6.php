<!DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Saisir les données du formulaire</p>
<form action="page6a.php" method="post">
    Matricule <br> <input type="text" name="matricule"/></br>
     Nom <br> <input type="text" name="name"/></br>
     Prenom:<br> <input type="text" name="prenom"/></br>
     Sexe : <input type="radio" name="sexe" value="H" checked> Masculin 
            <input type="radio" name="sexe" value="F"> Feminin </br>
    Adresse </br><input type="text" name="adresse" size="40"></br>
    Service : </br><SELECT name="service">
    <OPTION>Choisir
    <OPTION>Informatique
    <OPTION>Administrative
    <OPTION>Juridique
    <OPTION>Marketing
    </SELECT></br>
    Fonction : </br><SELECT name="fonction">
    <OPTION>Choisir
    <OPTION>Directeur
    <OPTION>Comptable
    <OPTION>Juriste
    <OPTION>Chargé de communication
    </SELECT></br></br>
     <input type="submit" values="Valider"/>
     <input type="reset" value="Réinitianiliser">
</form>
</body>
</html>