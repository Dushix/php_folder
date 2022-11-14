
<html>
<body>

<form action="EXPL2_AnalyseFormulaire.php" method="post">

    Nom :
    <input name="nom" type="text">
<br>
    Prenom :
    <input name="prenom" type="text">
    <br>
    <input list="BTS" name="BTS">
        <datalist id="BTS">
            <option value="Assurance">
            <option value="Commerce International">
            <option value="Communication">
            <option value="Comptabilité et Gestion">
            <option value="Gestion de la PME">
            <option value="SIO">
        </datalist>
    <br>
    <select name="Langue[]" multiple>
        <option value="Anglais">Anglais</option>
        <option value="Espagnol">Espagnol</option>
        <option value="Allemand">Allemand</option>
    </select>
    <br>
    <br>
    <input type="submit" name="soumettre" value="OK" />
</form>
</body>
</html>

