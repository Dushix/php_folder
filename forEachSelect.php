<?php
require ('./ConnectionMySQL.php') ;

$sql = "select nom, prenom from ELEVES" ;
$connection = getConnection();
$instructions = $connection->prepare($sql);
$instructions->execute();
$resultat = $instructions->fetchAll() ;

foreach($resultat as $ligne) {
    echo "$ligne[prenom] $ligne[nom] <BR>" ;
//     echo $ligne['prenom']." ".$ligne['nom']."<BR>" ;
}
