<?php
global $os;
$steps = [
    'Rufen Sie die Website von <a target="_blank" href="https://www.python.org">Python</a> auf. Fahren Sie dort mit der Maus über <q>Downloads</q>.',
    'Klicken Sie auf <q>Python 3.12  .x</q>, um den Download zu starten.',
    'Erlauben Sie den Download.',
    'Warten Sie, bis der Download abgeschlossen ist.',
    'Öffnen Sie die heruntergeladene Datei, um die Installation zu starten.',
    'Klicken Sie auf <q>Fortfahren</q>.',
    'Klicken Sie erneut auf <q>Fortfahren</q>.',
    'Klicken Sie auf <q>Fortfahren</q>, um die Lizenzbedingungen anzuzeigen.',
    'Klicken Sie nun auf <q>Akzeptieren</q>.',
    'Klicken Sie nun auf <q>Installieren</q>.',
    'Sie <b>müssen</b> die Installation mit Touch ID oder Passwort autorisieren.',
    'Warten, bis die Installation abgeschlossen ist. Fahren Sie nun bereits mit dem nächsten Schritt fort, da während der Installation weitere Aktionen erforderlich sein können.',
    'Geben Sie den Zugriff auf die Dateien frei, indem Sie auf <q>OK</q> klicken.',
    'Sollte sich während der Installation ein Ordner öffnen, schliessen Sie diesen einfach wieder.',
    'Beenden Sie die Installation, indem Sie auf <q>Schliessen</q> klicken.',
    'Legen Sie die Installationsdatei in den Papierkorb.'
];
$fullOs = "macOS Ventura (13.x)";
$browser = "Safari";
$osExample = "macOS Monterey";
$browserExample = "Google Chrome";
$numberOfSteps = count($steps);
include("hinweis.php");
include("steps.php");