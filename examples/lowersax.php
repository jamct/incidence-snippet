<?php
include('../src/LowerSax.php');


// Um die genaue Schreibweise des Landkreises zu ermitteln, laden Sie die CSV-Datei herunter und suchen Sie darin nach dem Landkreis. Hannover wird zum Beispiel über 'Hannover, Region' gefunden. Die CSV-Datei finden Sie hier:
//https://www.apps.nlga.niedersachsen.de/corona/download.php?csv_tag_region-file

$data = getData("Hannover, Region", 0);

//Die Datenfelder sind kompatibel zur RKI-Klasse 'Incidence'

//Nur eine simple Ausgabe der Daten:
echo "<pre>";
print_r($data);
echo "</pre>";
