<?php

$err_msg = '';
$num1 = '';
$num2 = '';
$num3 = '';
$i1 = 0;
$i2 = 0;
$i3 = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $i1 = $_POST['num1'];
    $i2 = $_POST['num2'];
    $i3 = $_POST['num3'];

    if (empty($i1)||empty($i2)||empty($i3)) {
        $err_msg = '全てに数字を入力してください';
    }elseif (($i1) && ($i2) && ($i3)) {
        $answer = $i1 + $i2 + $i3;
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
    <h1>数字を入力してください</h1>
    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="">1つめの数字</label><br>
            <input type="number" name="num1" id="" value="<?= $num1 ?>"><br>
            <label for="">2つめの数字</label><br>
            <input type="number" name="num2" id="" value="<?= $num2 ?>"><br>
            <label for="">3つめの数字</label><br>
            <input type="number" name="num3" id="" value="<?= $num3 ?>"><br>
            <div>
                <input type="submit" value="送信">
            </div>
        </div>
        <?php if (($i1) && ($i2) && ($i3)) : ?>
            <p><?= htmlspecialchars('合計値は' . $answer. 'です', ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </form>

</body>

</html>