<?php

$food = array('Healthy'=>
                     array('banana', 'apple'),
            'Unhealthy'=>
                      array('pizza', 'fried chicken'));
foreach($food as $element => $inner_element) {
    echo '<strong>'.$element.'</strong><br>';
    foreach($inner_element as $item) {
        echo $item.'<br>';
    }
}

?>