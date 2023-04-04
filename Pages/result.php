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
<body>
<header>
    <?php
    include "../Includes/nav.php";
    ?>
</header>
<!--hallo-->
<?php
if (isset($_POST["verzenden"]))
{
    $Name = isset($_POST["vr1"]);
}
else
{
    echo "<p>je hebt niet alles in gevuld</p>";
}
if (isset($_POST["verzenden"]))
{
    $Age = isset($_POST["vr2"]);
}
if (isset($_POST["verzenden"]))
{
    $Exp = isset($_POST["vr3"]);
}
if (isset($_POST["verzenden"]))
{
    $vr4 = isset($_POST["vr4"]);

}
if (isset($_POST["verzenden"]))
{
    $vr5 = isset($_POST["vr5"]);
}
if (isset($_POST["verzenden"]))
{
    $vr6 = isset($_POST["vr6"]);
}
if (isset($_POST["verzenden"]))
{
    $vr7 = isset($_POST["vr7"]);
}
if (isset($_POST["verzenden"]))
{
    $vr8 = isset($_POST["vr8"]);
}
if (isset($_POST["verzenden"]))
{
    $vr9 = isset($_POST["vr9"]);
}
if (isset($_POST["verzenden"]))
{
    $vr10 = isset($_POST["vr10"]);
}
if (isset($_POST["verzenden"]))
{
    $vr11 = isset($_POST["vr11"]);
}
if (isset($_POST["verzenden"]))
{
    $vr12 = isset($_POST["vr12"]);
}
if (isset($_POST["verzenden"]))
{
    $vr13 = isset($_POST["vr13"]);
}
if (isset($_POST["verzenden"]))
{
    $vr14 = isset($_POST["vr14"]);
}
if (isset($_POST["verzenden"]))
{
    $vr15 = isset($_POST["vr15"]);
}
$Totaal = $vr4+$vr5+$vr6+$vr7+$vr8+$vr9+$vr10+$vr11+$vr12+$vr13+$vr14+$vr15;

?>

</body>
</html>