<?php
// Démarre la session
session_start();

function my_add_to_session(string $key, string $value): void {
    
    $modified_value = $value . "titi";

    
    $_SESSION[$key] = $modified_value;

    
    echo "Session mise à jour : $key => $modified_value\n";
}


my_add_to_session("pseudo", "Max_");
?>
