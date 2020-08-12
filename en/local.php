<?php
$idioma='en';
function date2string ($date)
{
// Formato: día / mes / año
$string = date ("j/n/Y", strtotime($date));
return ($string);
}

?>