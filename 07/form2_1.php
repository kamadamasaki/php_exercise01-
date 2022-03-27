<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['スタイリスト'] = $stylists['スタイリスト']) {
        $select_stylist = 'Takashi';
    } elseif ($_POST['ハイスタイリスト'] = $stylists['スタイリスト']) {
        $select_stylist = 'Ken';
    } elseif ($_POST['トップスタイリスト'] = $stylists['スタイリスト']) {
        $select_stylist = 'Kyoutarou';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <option value="スタイリスト">スタイリスト</option>
            <option value="ハイスタイリスト">ハイスタイリスト</option>
            <option value="トップスタイリスト">トップスタイリスト</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>

    <?= 'あなたの担当は' . $stylist . 'です'?>

</body>

</html>