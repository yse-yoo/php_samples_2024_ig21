<?php
// 日曜日から土曜日までの曜日の配列
$weekdays = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>日曜日から土曜日までの表示</title>
</head>

<body>
    <?php foreach ($weekdays as $weekday) : ?>
        <p><?= $weekday ?></p>
    <?php endforeach ?>
</body>

</html>