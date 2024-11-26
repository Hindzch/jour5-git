<?php
function my_aff_global(): void {
   
    foreach ($GLOBALS as $key => $value) {
        
        if (is_string($value)) {
           
            echo "$key => $value\n";
        }
    }
}


$GLOBALS['a'] = "hello";
$GLOBALS['b'] = "world";
$GLOBALS['c'] = 123; 
$GLOBALS['d'] = "monde";

my_aff_global();
?>
