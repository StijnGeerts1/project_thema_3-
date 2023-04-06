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

    ?>
</header>
<!--hallo-->
<?php

$Total = 0;
if($Total >= 1) {


    if (isset($_POST["vr1"])) {
        $Name = isset($_POST["vr1"]);
    } else {
        $Name = null;
    }

    if (isset($_POST["vr2"])) {
        $Age = isset($_POST["vr2"]);
    } else {
        $Age = null;
    }


    if (isset($_POST["vr3"])) {
        $Exp = isset($_POST["vr3"]);
    } else {
        $Exp = null;
    }


    if (isset($_POST["vr4"])) {
        $vr4 = isset($_POST["vr4"]);
        $Total += $vr4;

    } else {
        $vr4 = null;
    }


    if (isset($_POST["vr5"])) {
        $vr5 = isset($_POST["vr5"]);
        $Total += $vr5;
    } else {
        $vr5 = null;
    }


    if (isset($_POST["vr6"])) {
        $vr6 = isset($_POST["vr6"]);
        $Total += $vr6;
    } else {
        $vr6 = null;
    }


    if (isset($_POST["vr7"])) {
        $vr7 = isset($_POST["vr7"]);
        $Total += $vr7;
    } else {
        $vr7 = null;
    }


    if (isset($_POST["vr8"])) {
        $vr8 = isset($_POST["vr8"]);
        $Total += $vr8;
    } else {
        $vr8 = null;
    }


    if (isset($_POST["vr9"])) {
        $vr9 = isset($_POST["vr9"]);
        $Total += $vr9;
    } else {
        $vr9 = null;
    }


    if (isset($_POST["vr10"])) {
        $vr10 = isset($_POST["vr10"]);
        $Total += $vr10;
    } else {
        $vr10 = null;
    }


    if (isset($_POST["vr11"])) {
        $vr11 = isset($_POST["vr11"]);
        $Total += $vr11;
    } else {
        $vr11 = null;
    }


    if (isset($_POST["vr12"])) {
        $vr12 = isset($_POST["vr12"]);
        $Total += $vr12;
    } else {
        $vr12 = null;
    }


    if (isset($_POST["vr13"])) {
        $vr13 = isset($_POST["vr13"]);
        $Total += $vr13;
    } else {
        $vr13 = null;
    }


    if (isset($_POST["vr14"])) {
        $vr14 = isset($_POST["vr14"]);
        $Total += $vr14;
    } else {
        $vr14 = null;
    }


    if (isset($_POST["vr15"])) {
        $vr15 = isset($_POST["vr15"]);
        $Total += $vr15;
    } else {
        $vr15 = null;
    }

}
else
{
    echo "<p>Je hebt geen vragen ingevuld</p>";
}


include("../Includes/footer.php")
?>

</body>
</html>