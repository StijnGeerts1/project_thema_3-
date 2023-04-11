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
    <link rel="stylesheet" href="../Styles/result.css">
    <link href="../Styles/nav-foot.css" rel="stylesheet">
    <title>Sense</title>
</head>
<body>
<header>
    <?php
    include "../Includes/nav.php";
    $_COOKIE["result"];
    ?>
</header>
<main>
    <?php

    $Total = 0;
    if($Total <= 1) {


        if (isset($_POST["vr1"])) {
            $Name = $_POST["vr1"];
        } else {
            $Name = null;
        }

        if (isset($_POST["vr2"])) {
            $Age = $_POST["vr2"];
        } else {
            $Age = null;
        }


        if (isset($_POST["vr3"])) {
            $Exp = $_POST["vr3"];
        } else {
            $Exp = null;
        }


        if (isset($_POST["vr4"])) {
            $vr4 = $_POST["vr4"];
            $Total += $vr4;

        } else {
            $vr4 = null;
        }


        if (isset($_POST["vr5"])) {
            $vr5 = $_POST["vr5"];
            $Total += $vr5;
        } else {
            $vr5 = null;
        }


        if (isset($_POST["vr6"])) {
            $vr6 = $_POST["vr6"];
            $Total += $vr6;
        } else {
            $vr6 = null;
        }


        if (isset($_POST["vr7"])) {
            $vr7 = $_POST["vr7"];
            $Total += $vr7;
        } else {
            $vr7 = null;
        }


        if (isset($_POST["vr8"])) {
            $vr8 = $_POST["vr8"];
            $Total += $vr8;
        } else {
            $vr8 = null;
        }


        if (isset($_POST["vr9"])) {
            $vr9 = $_POST["vr9"];
            $Total += $vr9;
        } else {
            $vr9 = null;
        }


        if (isset($_POST["vr10"])) {
            $vr10 = $_POST["vr10"];
            $Total += $vr10;
        } else {
            $vr10 = null;
        }


        if (isset($_POST["vr11"])) {
            $vr11 = $_POST["vr11"];
            $Total += $vr11;
        } else {
            $vr11 = null;
        }


        if (isset($_POST["vr12"])) {
            $vr12 = $_POST["vr12"];
            $Total += $vr12;
        } else {
            $vr12 = null;
        }


        if (isset($_POST["vr13"])) {
            $vr13 = $_POST["vr13"];
            $Total += $vr13;
        } else {
            $vr13 = null;
        }


        if (isset($_POST["vr14"])) {
            $vr14 = $_POST["vr14"];
            $Total += $vr14;
        } else {
            $vr14 = null;
        }


        if (isset($_POST["vr15"])) {
            $vr15 = $_POST["vr15"];
            $Total += $vr15;
        } else {
            $vr15 = null;
        }

    }
    else
    {
        echo "<p>Je hebt geen vragen ingevuld</p>";
    }

    $Date = date("d-m-y H:i");


    if ($Total >= 10 && $Total <= 30)
    {
        echo "<p>Beste $Name, u Past het beste op de positie van</p><h2>Schoonmaak</h2>";
        echo "<p>Deze lijst is ingevuld op: $Date</p>";


    }
    elseif ($Total >= 31 && $Total <= 50)
    {
        echo "<p>Beste $Name, u Past het beste op de positie van</p><h2>Bediening</h2>";
        echo "<p>Deze lijst is ingevuld op: $Date</p>";

    }
    elseif ($Total >= 51 && $Total <= 60)
    {
        echo "<p>Beste $Name, u Past het beste op de positie van</p><h2>Bar</h2>";
        echo "<p>Deze lijst is ingevuld op: $Date</p>";

    }
    else
    {
        echo "<p>Beste $Name, u Past het beste op de positie van</p><h2>Keuken</h2>";
        echo "<p>Deze lijst is ingevuld op: $Date</p>";
    }


    $looppunten = 4;
    for ($i = 4; $i < count($_POST); $i++) {
        $looppunten += $_POST["vr" . $i];
        echo "<p class='Totaal'>Totaal aantal punten na vraag " . ($i + 1) . " - " . $looppunten . "<br></p>";


        if ($i > 14) {
            break;

        }

    }
    ?>


</main>
<?php
    include("../Includes/footer.php");
?>
<?php
echo $Total;
    setcookie("result", $Total, time() + (60*60*24*14));
?>
</body>
</html>