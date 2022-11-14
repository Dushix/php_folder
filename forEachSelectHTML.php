<HTML>

<HEAD>
<meta charset="utf-8">
</HEAD>
<BODY>
<TABLE style="width:100%"> 
<CAPTION> Liste des élèves de la classe de mme Maitresse </CAPTION>
<TR>    <TH> Prénom </TH> 
        <TH> Nom </TH> 
</TR>
<?php
require ('./ConnectionMySQL.php') ;

$sql = "select nom, prenom from ELEVES" ;
$connection = getConnection();
$instructions = $connection->prepare($sql);
$instructions->execute();
$resultat = $instructions->fetchAll() ;

foreach($resultat as $ligne) { ?>
<tr align="center">
    <TD> 
    <?php echo "$ligne[prenom]"; ?> </TD>
    <TD>
    <?php echo "$ligne[nom]"; ?> </TD></TR>
<?php } ?>
</TABLE>
    </BODY>


<style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
</style>
</head>