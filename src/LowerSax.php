<?php
function getData($city, $offset = 0)
{
    $date = new DateTime("today -" . $offset . " day");
    $t = $date->format("U");

    $f = @file_get_contents('./nds.json');
    if ($f === false) {
        getFresh($t, $city);
    }
    $cached = json_decode($f, true);

    if (isset($cached[$t])) {
        $cc = $cached[$t];
        $cc['cached'] = 1;
        return $cc;
    }

    return getFresh($t, $city);
}

function getFresh($ts, $city)
{
    $csv = @file_get_contents('https://www.apps.nlga.niedersachsen.de/corona/download.php?csv_tag_region-file');

    $lines = explode("\n", $csv);

    $array = array();
    foreach ($lines as $line) {

        $d = str_getcsv($line, ";");
        if (isset($d[3]) and $d[3] == $city) {
            $date = DateTime::createFromFormat("d.m.Y, h:i", $d[0] . ", 00:00");
            $ts = $date->format('U');

            $d['cases7_per_100k'] = $d[6];
            $d['ts'] = $ts;
            $array[$ts] = $d;
        }
    }

    if (isset($array[$ts])) {
        file_put_contents("./nds.json", json_encode($array));
    }
    return $array[$ts];
}
