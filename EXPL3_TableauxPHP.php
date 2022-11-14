<?php
echo "<BR>" ;
$elevesSIO = array('Abchiche', 'Anton', 'Beaudoux', 'Desir','Diatta','Sandhu','Sandoz');
print_r($elevesSIO) ;
echo "<BR>" ;

$elevesSIO[] = 'Robert' ;
print_r($elevesSIO) ;


echo "<BR>" ;
foreach ($elevesSIO as $unEleve) {
    echo "quel rigolo ce $unEleve ! <BR>" ;
}

$notes = array(15, 14, 16, 17, 14, 18, 15) ;
print_r($notes) ;

echo "<BR>" ;
$mixte = array('c\' est en faisant n\'importe quoi', 150, 8.5);
print_r($mixte) ;

echo "<BR>" ;


$elevesNotes = array('chouchou' => 19, 'cancrounet' => 2, 'robert' => 19.5 );
print_r($elevesNotes);

echo "<BR>" ;

foreach ( $elevesNotes as $nomEleve => $noteEleve ) {
    echo "L'élève $nomEleve a eu pour note: $noteEleve <BR>" ;
}


$mixteAssoc = array('c\' est en faisant n\'importe quoi' => 0 , 150 => 'bien', 'carotte' => 8.5);
print_r($mixteAssoc) ;
echo "<BR>" ;

$paysCapitales = array('France' => 'Paris', 'Portugal' => 'Porto', 'Italie' => 'Rome' );

print_r($paysCapitales);