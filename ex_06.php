<?php
// Démarre la session
session_start();

function my_print_session(string $key): void {
    
    if (isset($_SESSION[$key])) {
        
        echo $_SESSION[$key] . "_END\n\n";
    }
}


my_print_session("pseudo");
?>
