<?php
//r  : lecture seule
//r+ : lecture et ecriture
//a  : ecriture création de fichier
//a+ : lecture et ecriture et creation de fichier




$base_url = "/home/mathieuc/";
if (isset($_GET['dossier'])) {
    $base_url = $base_url.$_GET['dossier'];
}
$dirs = scandir($base_url);


