<?php

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
    $msg1 = $msg;

    if (empty($msg)) {
        $err_msg = '年齢を入力してください';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="message" id="" value="<?= $msg ?>">

            <div>
                <input type="submit" value="送信">
            </div>
        </div>
        <?php if ($msg) : ?>
            <p><?= htmlspecialchars('私は' .$msg1 . '歳です', ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </form>

</body>

</html>