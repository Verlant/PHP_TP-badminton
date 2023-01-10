<?php
// $page = $_GET['page'];
// $page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRING);
$page = htmlspecialchars(filter_input(INPUT_GET, "page"));
// echo $page;
// echo isset($page);
$array = [
    "Lundi" => "18h à 22h",
    "Mardi" => "18h à 20h",
    "Mercredi" => "16h30 à 18h",
    "Jeudi" => "19h30 à 22h",
    "Vendredi" => "18h à 22h",
];
$jour = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

include 'common/template.php';
