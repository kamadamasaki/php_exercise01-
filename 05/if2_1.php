<?php

$poket_money = 1000;
$fund_raising = 101;

while ($poket_money >= 101) {
        echo 'あなたの所持金は'. $poket_money. '円です。'.'<br>';
        echo $fund_raising. '円募金しました。' . '<br>';
        $poket_money = $poket_money - $fund_raising;
        echo '残り残高は'. $poket_money. '円です。'. '<br>';
}echo 'あなたはこれ以上募金できません。';