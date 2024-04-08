<?php
// PHPプログラム
$title = "Top Page";

// Comment in / Comment out
// Ctrl + / Windows
// Cmd + / macOS

// Formatter
// Shift + Alt + F Windows
// Shift + Option + F macOS

// Array（配列）
$drinks = ["コーヒー", "紅茶", "ほうじ茶"];
// echo $drinks;
// Debug関数
// var_dump($drinks);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- formatter -->
    <!-- h1タグでTop Page -->
    <!-- <h1><?php print($title) ?></h1> -->
    <!-- <h1><?php echo $title ?></h1> -->
    <h1><?= $title ?></h1>
    <!-- ul li タグで３つリストを作ってください -->
    <ul>
        <?php if ($drinks) : ?>
            <?php foreach ($drinks as $key => $drink) : ?>
                <li><?= $drink ?></li>
            <?php endforeach ?>
        <?php endif ?>
    </ul>


    <!-- ul li タグで liが class="item" ３つリストを作ってください -->
    <div class="list">
        <ul>
            <!-- li.item -->
            <!-- .（ピリオド）: Web開発　= class -->
            <li class="item">1</li>
            <li class="item">2</li>
            <li class="item">3</li>
        </ul>
    </div>

    <!-- id = item-list の divを入力 -->
    <!-- #: Web開発　= id -->
    <div id="item-list">

    </div>

</body>

</html>