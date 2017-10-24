<?php
require_once 'merk.php';

$namanya = new merk('Adidas','Compass','Swallow');
echo "merk...".$namanya->get_ad().'<br>';
echo "merk...".$namanya->get_cs().'<br>';
echo "merk...".$namanya->get_sw().'<br>';
?>