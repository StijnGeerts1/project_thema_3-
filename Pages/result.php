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
    $Total = 0;

    if (isset($_POST["vr1"])) {
        $Name = isset($_POST["vr1"]);
    } else {
        $Name = null;
    }

    if (isset($_POST["vr2"])) {
        $Age = isset($_POST["vr2"]);
    }
    else {
        $Age = null;
    }


    if (isset($_POST["vr3"])) {
        $Exp = isset($_POST["vr3"]);
    } else {
        $Exp = null;
    }


    if (isset($_POST["vr4"])) {
        $Total += $_POST['vr4'];

    } else {
        $vr4 = null;
    }


    if (isset($_POST["vr5"])) {
        $Total += $_POST['vr5'];
    } else {
        $vr5 = null;
    }


    if (isset($_POST["vr6"])) {
        $Total += $_POST['vr6'];
    } else {
        $vr6 = null;
    }


    if (isset($_POST["vr7"])) {
        $Total += $_POST['vr7'];
    } else {
        $vr7 = null;
    }


    if (isset($_POST["vr8"])) {
        $Total += $_POST['vr8'];
    } else {
        $vr8 = null;
    }


    if (isset($_POST["vr9"])) {
        $Total += $_POST['vr9'];
    } else {
        $vr9 = null;
    }


    if (isset($_POST["vr10"])) {
        $Total += $_POST['vr10'];
    } else {
        $vr10 = null;
    }


    if (isset($_POST["vr11"])) {
        $Total += $_POST['vr11'];
    } else {
        $vr11 = null;
    }


    if (isset($_POST["vr12"])) {
        $Total += $_POST['vr12'];
    } else {
        $vr12 = null;
    }


    if (isset($_POST["vr13"])) {
        $Total += $_POST['vr13'];
    } else {
        $vr13 = null;
    }


    if (isset($_POST["vr14"])) {
        $Total += $_POST['vr14'];
    } else {
        $vr14 = null;
    }

    if (isset($_POST["vr15"])) {
        $Total += $_POST['vr15'];
    } else {
        $vr15 = null;
    }

    if ($Total >= 10 && $Total <= 30)
    {
        echo "<h2>Schoonmaak</h2>";

    }
    elseif ($Total >= 31 && $Total <= 50)
    {
        echo "<h2>Bediening</h2>";

    }
    elseif ($Total >= 51 && $Total <= 60)
    {
        echo "<h2>Bar</h2>";

    }
    else
    {
        echo "<h2>Keuken</h2>";

    }





$Time = time();

echo $Name;
echo $Total;
echo (date("d-m-y",$Time));



?>

</body>
</html>