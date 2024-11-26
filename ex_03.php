<?php
function my_add_to_cookie(string $key, string $value): void {
    $modified_value = $value . "toto";
    setcookie($key, $modified_value);
}


my_add_to_cookie("pseudo", "Max_");


if (isset($_COOKIE['pseudo'])) {
    echo "Cookie pseudo : " . $_COOKIE['pseudo'] . "\n";
} else {
    echo "Le cookie n'est pas encore disponible. Rechargez la page.\n";
}
?>




