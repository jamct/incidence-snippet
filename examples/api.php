<?php
include('../src/Incidence.php');

# Find your region here and get the OBJECTID: 
# https://npgeo-corona-npgeo-de.hub.arcgis.com/datasets/917fc37a709542548cc3be077a786c17_0

if(!isset($_GET['id']))
{
	exit('No id provided');
}

$id = $_GET['id']; // Hannover = 27
$cache_file = "./data_{$id}.json";
$incidence = new Incidence($id, $cache_file);

$today = $incidence->getDaily(0);

header('Content-Type: application/json');
$myJSON = json_encode($today);

echo $myJSON;