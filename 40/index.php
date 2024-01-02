<?php

/*
Healthy
banana
apple

unhealthy
vegetable
*/

$food = array('Healthy'=>
                        array('banana'=>300, 'apple'),
            'Unhealthy'=>
                        array('pizza', 'fried chicken'));

print_r($food['Healthy']['banana']);


?>