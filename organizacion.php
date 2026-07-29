<?php
require_once('lib/includeLibs.php');
require_once('class/organizacion.php');

$class = new organizacion;
echo $class->Display();
?>