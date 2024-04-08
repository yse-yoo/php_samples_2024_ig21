<?php
    // PHPプログラム
    $title = "Top Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- h1タグでTop Page -->
    <h1><?php print($title) ?></h1>
    <h1><?php echo $title ?></h1>
    <h1><?= $title ?></h1>
    <!-- ul li タグで３つリストを作ってください -->
    <ul>
        <li>コーヒー</li>
        <li>紅茶</li>
        <li>ほうじ茶</li>
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