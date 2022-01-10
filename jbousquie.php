<?php
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
jerome@lamp:~/public_html/images$ cat jbousquie.php 
<?php
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