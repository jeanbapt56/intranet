<?php
    include "header.php";

    require("Planning.class.php");
    require("Calendrier.class.php");

    $unPlanning = new Planning(123);    // on suppose que l'ID session vaut 123
    $unCalendrier = new Calendrier($unPlanning);

    echo "<h1>Planning</h1>";

    //$unPlanning->afficheListeComplete();
/*
    $unPlanning->afficheListeEntreDeuxDates('2019-01-01', '2019-01-31');
    echo "<hr>";
*/

/*    $unMois = $unPlanning->extraireCalendrier(6,2019);
    $unPlanning->extraireCalendrier(1,2019);
    $unPlanning->extraireCalendrier(12,2019);*/

    $unCalendrier->afficheMois(5, 2019, TRUE);    echo "<hr>";
    $unCalendrier->afficheMois(11, 2018, FALSE);  echo "<hr>";
    $unCalendrier->afficheMois(5, 2020, TRUE);    echo "<hr>";
    $unCalendrier->afficheMois(5, 2022, FALSE);   echo "<hr>";
    $unCalendrier->afficheMois(11, 2016, FALSE);   echo "<hr>";

    $unCalendrier->afficheTousLesMois(TRUE);


    include_once "footer.php";
?>
