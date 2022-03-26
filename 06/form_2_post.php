<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '私の名前は、'. $_POST['message']. 'です。'. '<br>';
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
    <a href="form_2.php">戻る</a>
</body>
</html>
