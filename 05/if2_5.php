<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            $i = '明日です。';
        break;
        case '英語':
            $i = '明後日です。';
        break;
        case '理科':
            $i = '明々後日です。';
        break;
        case '社会':
            $i = '昨日です。';
        break;
        case '国語':
            $i = '中止です。';
        break;
    }
    echo $subject. 'の試験は'. $i. '<br>';
}