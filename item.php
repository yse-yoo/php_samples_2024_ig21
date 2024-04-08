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
$drinks = ["コーヒー", "紅茶", "ほうじ茶",];
// echo $drinks;
// Debug関数
// var_dump($drinks);

$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@test.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@tet.com'],
    ['id' => 3, 'name' => 'Chris', 'email' => 'chris@test.com'],
];
// var_dump($users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
    // JavaScript
    // users =[
    //     {'id': 1, name: 'Alice'},   
    //     {'id': 2, name: 'Bob'},   
    //     {'id': 3, name: 'Chris'},   
    // ];
    </script>
</head>

<body>
    <!-- formatter -->
    <!-- h1タグでTop Page -->
    <!-- <h1><?php print($title) ?></h1> -->
    <!-- <h1><?php echo $title ?></h1> -->
    <h1><?= $title ?></h1>
    <!-- ul li タグで３つリストを作ってください -->
    <!-- $drinksデータの判別 -->
    <?php if ($drinks) : ?>
        <ul>
            <!-- $drinks データの繰り返し  -->
            <?php foreach ($drinks as $key => $drink) : ?>
                <li><?= $drink ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>


    <!-- $users のデータを id name email を Tableタグで一覧表示 -->
    <div class="user-list">

    </div>

    <!-- id = item-list の divを入力 -->
    <!-- #: Web開発　= id -->
    <div id="item-list">

    </div>

</body>

</html>