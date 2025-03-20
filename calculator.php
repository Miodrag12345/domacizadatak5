<?php

//var_dump($_GET);
$vrstaRacunice= $_GET["vrsta_racunice"];
$broj1=$_GET["broj_1"];
$broj2=$_GET["broj_2"];

if ($vrstaRacunice == "sabiranje")
{
    echo $broj1 + $broj2;
}

else if ($vrstaRacunice == "oduzimanje")
{
    echo $broj1 - $broj2;
}