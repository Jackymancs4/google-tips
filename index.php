<?php

$query = 'scanner+fg';
$bbb = file_get_contents('https://www.google.it/complete/search?sclient=psy-ab&js=true&site=&source=hp&q='.$query);

print_r($bbb);
echo '<br>';
echo '<br>';

$ccc = str_split($bbb);

$pattern = '/\"(.*?)\"/';
$matches = preg_match_all($pattern, $bbb, $outb);

$pattern = '/\[\".*\",(\[.*\]),{.*}\]/';
$matches = preg_match_all($pattern, $bbb, $out);

$pattern = '/\"(.*?)\"/';
$matches = preg_match_all($pattern, $out[1][0], $outa);

print_r($outb[1][0]);
echo '<br>';
echo '<br>';

foreach ($outa[1] as $key => $value) {
    $res = str_replace("\u003cb\u003e", '-->', $value);
    $res = str_replace("\u003c\/b\u003e", '<--', $res);

    echo $res.'<br>';
}
