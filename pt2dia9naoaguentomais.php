<?php
$string= "São Paulo";
$nova_string = preg_replace(array("/á/","/ã/","/â/","/à/","/é/","/ê/","/í/","/ó/","/ô/","/õ/","/ú/"), array("a","a","a","a","e","e","i","o","o","o","u"), $string);
echo $nova_string;
?>