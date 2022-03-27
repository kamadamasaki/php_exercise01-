<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <p><?= htmlspecialchars('私の名前は、' . $_POST['name'] . 'です。' , ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
    <a href="form_2.php">戻る</a>
</body>

</html>