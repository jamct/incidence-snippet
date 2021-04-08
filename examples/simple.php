<?php
include('../src/Incidence.php');

# Find your region here and get the OBJECTID: 
# https://npgeo-corona-npgeo-de.hub.arcgis.com/datasets/917fc37a709542548cc3be077a786c17_0

$id = 27; // Hannover
$cache_file = './data.json';
$incidence = new Incidence($id, $cache_file);

$today = $incidence->getDaily(0);

echo "
<table border='1'>
<tr><td colspan='2'>" . $today['GEN'] . "</td></tr>
<tr><td>7-Tage-Inzidenz</td><td>" . round($today['cases7_per_100k'], 2) . "</td></tr>
<tr><td>Fälle insgesamt</td><td>" . $today['cases'] . "</td></tr>
<tr><td>Fälle letzte 7 Tage</td><td>" . $today['cases7_lk'] . "</td></tr>
<tr><td>Tote</td><td>" . $today['deaths'] . "</td></tr>
<tr><td colspan='2'>Bundesland</td></tr>
<tr><td>7-Tage-Inzidenz</td><td>" . round($today['cases7_bl_per_100k'], 2) . "</td></tr>
<tr><td>Fälle letzte 7 Tage</td><td>" . $today['cases7_bl'] . "</td></tr>
</table>";
