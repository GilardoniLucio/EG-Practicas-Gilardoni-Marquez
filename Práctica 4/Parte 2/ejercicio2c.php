<?php
$matriz = array(5 => 1, 12 => 2);
print_r($matriz);
$matriz[] = 56;
print_r($matriz);

$matriz["x"] = 42; 
print_r($matriz);
unset($matriz[5]); 
print_r($matriz);
unset($matriz);
?>