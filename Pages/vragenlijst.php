<!--
datum :27-3-2023
auteur: Stijn, Beau en vadinho
project
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sense</title>
</head>
<header>
    <?php
    include "../Includes/nav.php";

    ?>
</header>
<body>
<?php

// om het uur op te slaan
$hour = date(format:"H");
// om aan de hand van het uur een zin maken
if ($hour <=5)
{
    echo "<h2>Goedenacht, welkom op onze site</h2><br>
          <p>Wij hebben een zelftest gemaakt voor toekomstige medewerkers en huidige medewerkers zodat jullie je beste behorende afdeling komen. De afdelingen zijn: barmedewerker, bediening medewerker, schoonmaak en chef. Dus denk goed na over de vragen.</p>";
}
elseif ($hour >= 6 && $hour<=11)
{
    echo "<h2>Goedemorgen, welkom op onze site</h2><br>
          <p>Wij hebben een zelftest gemaakt voor toekomstige medewerkers en huidige medewerkers zodat jullie je beste behorende afdeling komen. De afdelingen zijn: barmedewerker, bediening medewerker, schoonmaak en chef. Dus denk goed na over de vragen.</p>";
}
elseif ($hour >= 12 && $hour<=17)
{
    echo "<h2>Goedemiddag, welkom op onze site</h2><br>
          <p>Wij hebben een zelftest gemaakt voor toekomstige medewerkers en huidige medewerkers zodat jullie je beste behorende afdeling komen. De afdelingen zijn: barmedewerker, bediening medewerker, schoonmaak en chef. Dus denk goed na over de vragen.</p>";
}
elseif ($hour >=18 && $hour<=23)
{
    echo "<h2>Goedenavond, welkom op onze site</h2><br>
          <p>Wij hebben een zelftest gemaakt voor toekomstige medewerkers en huidige medewerkers zodat jullie je beste behorende afdeling komen. De afdelingen zijn: barmedewerker, bediening medewerker, schoonmaak en chef. Dus denk goed na over de vragen.</p>";
}
?>
<form action="result.php" method="post" name="zelftest">

    <p>Wat is u Naam?</p>
    <input type="text" name="vr1">

    <p>Wat is u Leeftijd?</p>
    <input type="text" name="vr2">

    <p>Wat was uw Vorige werkgever? (als u er een had)</p>
    <input type="text" name="vr3">


    <p>Ervaring in de afwas?</p>
    <label><input type="radio" name="vr4" value="2" required>ja</label><br>
    <label><input type="radio" name="vr4" value="10" required>nee</label>


    <p>Ervaring in de bediening?</p>
    <label><input type="radio" name="vr5" value="5" required>ja</label><br>
    <label><input type="radio" name="vr5" value="2" required>nee</label>


    <p>Ervaring achter de bar?</p>
    <label><input type="radio" name="vr6" value="15" required>ja</label><br>
    <label><input type="radio" name="vr6" value="2" required>nee</label>


    <p>Kunt u goed met kritiek omgaan(Lastige klanten)?</p>
    <label><input type="radio" name="vr7" value="5" required>ja</label><br>
    <label><input type="radio" name="vr7" value="2" required>nee</label>


    <p>Begin je makkelijk een gesprek?</p>
    <label><input type="radio" name="vr8" value=5" required>ja</label><br>
    <label><input type="radio" name="vr8" value="2" required>nee</label>


    <p>Ben je snel vies van eten of etensresten?</p>
    <label><input type="radio" name="vr9" value="5" required>ja</label><br>
    <label><input type="radio" name="vr9" value="-5" required>nee</label>


    <p>Heb je ervaring als kok in de horeca?</p>
    <label><input type="radio" name="vr15" value="30" required>ja</label><br>
    <label><input type="radio" name="vr15" value="2" required>nee</label>


    <p>Kan je onder druk werken?</p>
    <label><input type="radio" name="vr10" value="2" required>ja</label><br>
    <label><input type="radio" name="vr10" value="2" required>nee</label>


    <p>Ben je bereid om te leren?</p>
    <label><input type="radio" name="vr11" value="2" required>ja</label><br>
    <label><input type="radio" name="vr11" value="2" required>nee</label>


    <p>Kan je goed samenwerken?</p>
    <label><input type="radio" name="vr12" value="2" required>ja</label><br>
    <label><input type="radio" name="vr12" value="5" required>nee</label>


    <p>Denk je dat jij een horeca uitstraling hebt?</p>
    <label><input type="radio" name="vr13" value="5" required>ja</label><br>
    <label><input type="radio" name="vr13" value="2" required>nee</label>


    <p>Vind je het niet erg om een aantal overuren te maken?</p>
    <label><input type="radio" name="vr14" value="2" required>ja</label><br>
    <label><input type="radio" name="vr14" value="2" required>nee</label>




    <p>Wat denk jij wat jouw uitslag wordt?</p>
    <label><input type="checkbox"  value="0">bar</label><br>
    <label><input type="checkbox"  value="0">chef</label><br>
    <label><input type="checkbox"  value="0">bediening</label><br>
    <label><input type="checkbox"  value="0">schoonmaak</label><br>
    <input type="submit"  value="verzenden" id="lijstbutton">
</form>
</body>
</html>
