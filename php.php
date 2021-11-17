<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
	<style>
		span{
            color: red;
		    }
	</style>
	<title>FORMULAIRE</title>
</head>
<body> 
	<?php
	   echo "<p>Bonjour</p>";
	   echo "<p>Nous sommes le";
	   echo date ('j/m/y');
	   echo "</p>";
	?>
	   <caption>FORMULAIRE</caption>
	   <form action="insertion.php" method="post">
		    Nom:<input type="text" name="Nom"> <br>
		    Prenom:<input type="text" name="Prenom"> <br>
		    Adresse:<input type="text" name="adresse"> <br>
		    Mot de passe:<input type="pasword" name="pasword"/> <br>
		    sexe:<input type="radio" name="sexe" value="homme">HOMME
                 <input type="radio" name="sexe" value="femme">FEMME <br>
            Date de naissance
            <?php
              if ($_SESSION["date"]!="")
              {
              	echo"<span>".$_SESSION["date"]."</span>";
              }
            ?> 
            <select name="jour">
            	<option>JOUR</option>
            	<?php
            	for ($i=1; $i<=31; $i++)
            	{
            	    echo "<option value=".$i.">".$i."</option>";
                }
                ?>
            </select>
            <select name="mois">
            	<option>MOIS</option>
            	<?php
            	for ($i=1; $i<=12; $i++)
            	{
            		echo "<option value=".$i.">".$i."</option>";
            	}
            	?>
            </select>
            <select name="annee">
            	<option>ANNEE</option>
            	<?php
            	$anneeEnCours=date('Y');
            	$anneeDebut= $anneeEnCours-50;
            	$anneeFin=$anneeEnCours-17;
            	for($i=$anneeDebut;$i<=$anneeFin;$i++)
            	{
            		echo "<option value=".$i.">".$i."</option>";
            	}
            	?>
            </select> <br>
            <input type="submit" value="enregistrer">
            <input type="reset" value="annuler">
	    </form>    

</body>
