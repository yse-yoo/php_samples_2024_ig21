<?php
$sunday = strtotime('last Sunday');
$today = date('Y年m月d日');
$days = [];
foreach (range(0, 6) as $offset) {
    $days[] = date('d', strtotime("+{$offset} day", $sunday));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2><?= $today ?></h2>
        <table class="table">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <tr>
                <?php foreach ($days as $date) : ?>
                    <td><?= $date; ?></td>
                <?php endforeach ?>
            </tr>
        </table>
    </div>
</body>

</html>