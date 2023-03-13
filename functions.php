<?php

function create_password($length) {
    $password = [];

    for ($i = 0; $i < $length; $i++) {
        $letter = chr(rand(33, 126));
        $password[] = $letter;
    }
    $password = implode('', $password);
    return $password;
}

?>