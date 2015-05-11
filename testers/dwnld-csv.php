<?php
/**
 * Created by PhpStorm.
 * User: sonderful
 * Date: 28.01.15
 * Time: 23:29
 */



function dwnldcsv(){
    echo('sayonara');
$url = 'https://web.fulcrumapp.com/shares/54c16a1fb91dcd67.csv';
$source = file_get_contents($url);
file_put_contents('newfilename.csv', $source);
}
dwnldcsv();
?>
HALO HALO