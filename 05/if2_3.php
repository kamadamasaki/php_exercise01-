<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

    echo '私は、'. '<br>';

foreach ($foods as $food => $i) {
    echo $food. 'に'. $i. '<br>';
}

    echo 'を食べます';
    