#! /bin/bash
# Script sur la machine qui émet les mails.
# Ce script est lancé par cron chaque minute par exemple.
# Il produit un fichier signature. Ce fichier est lu par Thunderbird à chaque rédaction d'un nouveau mail.
signature_file="./signature.html"
ts=`date +%s`
imgtag="<img src=\"https://web.iut-rodez.fr/~jerome/images/jbousquie.php?t=$ts\" alt=\"signature Jérôme Bousquié $ts\"><br/><p style=\"font-size: 0.6em; text-align: right;\">$ts</p>"
echo $imgtag > $signature_file