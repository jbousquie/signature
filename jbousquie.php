<?php
// Script sur le serveur PHP
// Il récupère la valeur du paramètre passé et quelques valeurs de headers
// Il écrit ses valeurs dans un fichier csv sur le serveur
// Il renvoie l'image de signature attendue avec le header de content-type adéquat

$path = '/home/jerome/public_html/images/jbousquie.png';
$filename = '/home/jerome/public_html/images/read.txt';

$id = $_GET["t"];

function getRealIpAddr(){
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
         // Check IP is passed from proxy.
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
    else {
        // Get IP address from remote address.
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
};

$ip = getRealIpAddr();
$dt = date('Y/m/d H:i:s');
$ua = $_SERVER['HTTP_USER_AGENT'];
$sep = "|";
$line = $dt . $sep . $id . $sep . $ip . $sep . $ua . "\n";

$fic = fopen($filename, 'a');
fwrite($fic, $line);


header("Content-type: image/png");
readfile($path);
?>