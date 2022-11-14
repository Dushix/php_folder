<?php
$nom_professeur = "Robert" ;
$prenom_professeur = "Timothee" ;
$nom_delegue = "Pragarane" ; 
$prenom_delegue = "Rigane" ;
$lien_script = "EXPL1_avisProfesseur.php?nomProf=$nom_professeur&prenomProf=$prenom_professeur" ;
$lien_script2 = "EXPL1_delegue.php?nomDelegue=$nom_delegue&prenomDelegue=$prenom_delegue" ;
echo "<a href='$lien_script'> Qui est le plus sévère des professeurs ?<br> </a>" ;
echo "<a href='$lien_script2'> Qui est le délégué de la classe ?<br> </a>" ;
?>
