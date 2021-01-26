<!DOCTYPE HTML>
<html lang='en'>
<head>
     <meta charset="UTF-8">
</head>

<body>
<p>Saisir les données du formulaire des employe</p>
<form action="page7.php" method="get">
    Matricule <br> <input type="text" name="matricule"/></br>
     Nom <br> <input type="text" name="name"/></br>
     Prenom:<br> <input type="text" name="prenom"/></br>
     Sexe : <input type="radio" name="sexe" value="M" checked> Masculin 
            <input type="radio" name="sexe" value="F"> Feminin </br>
    Adresse </br><input type="text" name="adresse" size="40"></br>
    <p>
     <input type="submit" />
     <input type="reset" >
    </p>
</form>
<p>
    <?php
        echo"<table border='1' width='700' cellspacing='0'>";
            echo"<tr>";
                echo "<td>Employe 1 <br>";
                    echo 'Matricule : '.$_GET["matricule"].'<br>';
                    echo 'Nom : '.$_GET["name"].'<br>';
                    echo 'Prénom : '.$_GET["prenom"].'<br>';
                    echo 'Adresse : ' .$_GET["adresse"].'<br>';
                    echo 'Sexe : ' .$_GET["sexe"].'<br>';
                echo "</td>";
                echo "<td>Employe 2 <br>";
                    echo 'Matricule : '.$_GET["matricule"].'<br>';
                    echo 'Nom : '.$_GET["name"].'<br>';
                    echo 'Prénom : '.$_GET["prenom"].'<br>';
                    echo 'Adresse : ' .$_GET["adresse"].'<br>';
                    echo 'Sexe : ' .$_GET["sexe"].'<br>';
                echo "</td>";
                echo "<td>Employe 3 <br>";
                    echo 'Matricule : '.$_GET["matricule"].'<br>';
                    echo 'Nom : '.$_GET["name"].'<br>';
                    echo 'Prénom : '.$_GET["prenom"].'<br>';
                    echo 'Adresse : ' .$_GET["adresse"].'<br>';
                    echo 'Sexe : ' .$_GET["sexe"].'<br>';
                echo "</td>";
                echo "<td>Employe 4 <br>";
                    echo 'Matricule : '.$_GET["matricule"].'<br>';
                    echo 'Nom : '.$_GET["name"].'<br>';
                    echo 'Prénom : '.$_GET["prenom"].'<br>';
                    echo 'Adresse : ' .$_GET["adresse"].'<br>';
                    echo 'Sexe : ' .$_GET["sexe"].'<br>';
                echo "</td>";
                echo "<td>Employe 5 <br>";
                    echo 'Matricule : '.$_GET["matricule"].'<br>';
                    echo 'Nom : '.$_GET["name"].'<br>';
                    echo 'Prénom : '.$_GET["prenom"].'<br>';
                    echo 'Adresse : ' .$_GET["adresse"].'<br>';
                    echo 'Sexe : ' .$_GET["sexe"].'<br>';
                echo "</td>";
            echo "</tr>";
        echo"</table>";
    ?>
</p>
</body>
</html>