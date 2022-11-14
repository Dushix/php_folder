<?php print_r($_POST); ?>

<table>
<?php
$nom=$_POST['nom'] ;
echo "nom <BR>" ;

foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    if(is_array($value)){
        foreach($value as $element){
            echo $element;
        }
    }
    else echo $value;
    echo "</td>";
    echo "</tr>";
    echo "<BR>" ;
}


?>
</table>
