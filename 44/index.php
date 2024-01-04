<?php

function has_sharp($string) {
    if (preg_match('/#/', $string)) {
        return true;
    }
    else {
        return false;
    }
}
$sentence = "does this have #?";

if (has_sharp($sentence)) {
    echo 'The sentence has sharp.';
}
else {
    echo 'This does not have sharp.';
}


?>