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
<form action="result.php" method="post">
    <p>Wat is u Naam?</p>
    <input type="text" name="vr1">
    <p>Wat is u Leeftijd?</p>
    <input type="text" name="vr2">
    <p>Wat was uw Vorige werkgever? (als u er een had)</p>
    <input type="text" name="vr3">
    <p>Ervaring in de afwas?</p>
    <label>ja<input type="radio" name="vr4" value="1"></label><br>
    <label>nee<input type="radio" name="vr4" value="0"></label>
    <p>Ervaring in de bediening?</p>
    <label>ja<input type="radio" name="vr5" value="1"></label><br>
    <label>nee<input type="radio" name="vr5" value="0"></label>
    <p>Ervaring achter de bar?</p>
    <label>ja<input type="radio" name="vr6" value="1"></label><br>
    <label>nee<input type="radio" name="vr6" value="0"></label>
    <p>Kunt u goed met kritiek omgaan(Lastige klanten)?</p>
    <label>ja<input type="radio" name="vr7" value="1"></label><br>
    <label>nee<input type="radio" name="vr7" value="-1"></label>
    <p>Begin je makkelijk een gesprek?</p>
    <label>ja<input type="radio" name="vr8" value="1"></label><br>
    <label>nee<input type="radio" name="vr8" value="-1"></label>
    <p>Ben je snel vies van eten of etensresten?</p>
    <label>ja<input type="radio" name="vr9" value="-1"></label><br>
    <label>nee<input type="radio" name="vr9" value="1"></label>
    <p>Kan je onder druk werken?</p>
    <label>ja<input type="radio" name="vr10" value="1"></label><br>
    <label>nee<input type="radio" name="vr10" value="0"></label>
    <p>Ben je bereid om te leren?</p>
    <label>ja<input type="radio" name="vr11" value="1"></label><br>
    <label>nee<input type="radio" name="vr11" value="-2"></label>
    <p>Kan je goed samenwerken?</p>
    <label>ja<input type="radio" name="vr12" value="2"></label><br>
    <label>nee<input type="radio" name="vr12" value="1"></label>
    <p>Denk je dat jij een horeca uitstraling hebt?</p>
    <label>ja<input type="radio" name="vr13" value="1"></label><br>
    <label>nee<input type="radio" name="vr13" value="0"></label>
    <p>Vind je het niet erg om een aantal overuren te maken?</p>
    <label>ja<input type="radio" name="vr14" value="0"></label><br>
    <label>nee<input type="radio" name="vr14" value="1"></label>
    <p>Vind je het niet erg om een aantal overuren te maken?</p>
    <label>ja<input type="radio" name="vr15" value="0"></label><br>
    <label>nee<input type="radio" name="vr15" value="1"></label><br>
    <input type="submit">
</form>
</body>
</html>
