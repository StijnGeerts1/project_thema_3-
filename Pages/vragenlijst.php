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
    echo "<p>Goedenacht, welkom op onze site</p><br>
            <p></p>";
}
elseif ($hour >= 6 && $hour<=11)
{
    echo "<p>Goedemorgen, welkom op onze site</p>";
}
elseif ($hour >= 12 && $hour<=17)
{
    echo "<p>Goedemiddag, welkom op onze site</p>";
}
elseif ($hour >=18 && $hour<=23)
{
    echo "<p>Goedenavond, welkom op onze site</p>";
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
    <label><input type="radio" name="vr4" value="1">ja</label><br>
    <label><input type="radio" name="vr4" value="0">nee</label>
    <p>Ervaring in de bediening?</p>
    <label><input type="radio" name="vr5" value="1">ja</label><br>
    <label><input type="radio" name="vr5" value="0">nee</label>
    <p>Ervaring achter de bar?</p>
    <label><input type="radio" name="vr6" value="1">ja</label><br>
    <label><input type="radio" name="vr6" value="0">nee</label>
    <p>Kunt u goed met kritiek omgaan(Lastige klanten)?</p>
    <label><input type="radio" name="vr7" value="1">ja</label><br>
    <label><input type="radio" name="vr7" value="-1">nee</label>
    <p>Begin je makkelijk een gesprek?</p>
    <label><input type="radio" name="vr8" value="1">ja</label><br>
    <label><input type="radio" name="vr8" value="-1">nee</label>
    <p>Ben je snel vies van eten of etensresten?</p>
    <label><input type="radio" name="vr9" value="-1">ja</label><br>
    <label><input type="radio" name="vr9" value="1">nee</label>
    <p>Kan je onder druk werken?</p>
    <label><input type="radio" name="vr10" value="1">ja</label><br>
    <label><input type="radio" name="vr10" value="0">nee</label>
    <p>Ben je bereid om te leren?</p>
    <label><input type="radio" name="vr11" value="1">ja</label><br>
    <label><input type="radio" name="vr11" value="-2">nee</label>
    <p>Kan je goed samenwerken?</p>
    <label><input type="radio" name="vr12" value="2">ja</label><br>
    <label><input type="radio" name="vr12" value="1">nee</label>
    <p>Denk je dat jij een horeca uitstraling hebt?</p>
    <label><input type="radio" name="vr13" value="1">ja</label><br>
    <label><input type="radio" name="vr13" value="0">nee</label>
    <p>Vind je het niet erg om een aantal overuren te maken?</p>
    <label><input type="radio" name="vr14" value="0">ja</label><br>
    <label><input type="radio" name="vr14" value="1">nee</label>
    <p>Vind je het niet erg om een aantal overuren te maken?</p>
    <label><input type="radio" name="vr15" value="0">ja</label><br>
    <label><input type="radio" name="vr15" value="1">nee</label><br>
    <input type="submit"  value="verzenden" id="lijstbutton">
</form>
</body>
</html>
