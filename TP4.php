<?php
$matieresSIO = array('Culture-générale', 'CEJM', 'Mathématiques', 'Algorithmie', 'Anglais', 'Atelier professionnel', 'Bloc 1 Support', 'Bloc 3 Cyberdéfense') ;
print_r($matieresSIO) ;
echo '<br>' ;
echo $matieresSIO[1], "\n", $matieresSIO[2];
echo '<br>' ;
$matieresSIO[] = 'Relaxation';
print_r($matieresSIO) ;
echo '<br>' ;



$objectifsSIO = array('Culture-générale' => 15, 'CEJM' => 17, 'Mathématiques' => 17, 'Algorithmie' => 19, 'Anglais' => 19, 'At.profess' => 19, 'Bloc 1 Support' => 18, 'Bloc 3 Cyber' => 20 ) ;
print_r($objectifsSIO) ;
echo '<br>' ;
$objectifsSIO['Détente'] = 19.5;
print_r($objectifsSIO)  ;
echo '<br>' ;
echo '<br>' ;



echo "Les matières de cette année sont :<br>" ;
foreach($matieresSIO as $une_matiere) { 
    echo "  -$une_matiere<br>";
};
echo '<br>' ;
echo '<br>' ;
foreach($objectifsSIO as $matiere => $note) {
    echo "Je vise $note pour la matiere $matiere <br>";
}
echo '<br>' ;
echo '<br>' ;
unset($matieresSIO[0]);
print_r($matieresSIO);