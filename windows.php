<?php
global $os;
$steps = [
    'Rufen Sie die Website von <a target="_blank" href="https://www.python.org">Python</a> auf. Fahren Sie dort mit der Maus über <q>Downloads</q>.',
    'Klicken Sie auf <q>Python 3.12.x</q>, um den Download zu starten.',
    'Warten Sie, bis der Download abgeschlossen ist.',
    'Öffnen Sie das <q>Download-Menü</q>, indem Sie auf <span class="icon"><i class="fa-solid fa-download"></i></span> klicken. Klicken Sie dann auf die Datei, um die Installation zu starten.',
    'Wählen Sie <b>zuerst</b> <q>Use admin privileges when installing py.exe</q> <b>und</b> <q>Add python.exe to PATH</q> aus und klicken Sie <b>dann</b> auf <q>Install Now</q>.',
    'Erlauben Sie die Installation, indem Sie auf <q>Ja</q> klicken.',
    'Warten, bis die Installation abgeschlossen ist.',
    'Beenden Sie die Installation, indem Sie auf <q>Close</q> klicken.'
];
$fullOs = "Windows 11";
$browser = "Google Chrome";
$osExample = "Windows 10";
$browserExample = "Microsoft Edge";
$numberOfSteps = count($steps);
include("hinweis.php");
include("steps.php");
?>