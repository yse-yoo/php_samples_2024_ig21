<?php
// env.php を読み込む
require_once 'env.php';

// 設定
$db_connection = DB_CONNECTION;
$db_name = DB_DATABASE;
$db_host = DB_HOST;
$db_port = DB_PORT;

$dsn = "{$db_connection}:dbname={$db_name};host={$db_host};port={$db_port};charset=utf8;";
$db_user = DB_USERNAME;
$db_password = DB_PASSWORD;

try {
    // PDO接続
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
    exit;
}

//スーパーグローバル変数
// GET: $_GET
// POST: $_POST
// REQUEST: $_REQUEST
//
// Session: $_SESSION
// Server: $_SERVER
// File: $_FILES

if (isset($_GET['q'])) {
    $keyword = $_GET['q'];

} else {    $sql = "SELECT * FROM users 
                    WHERE name LIKE '%{$keyword}%' 
                    OR email LIKE '%{$keyword}%';";
    $sql = "SELECT * FROM users;";
}

// SQLの実行
$stmt = $pdo->query($sql);
// var_dump($stmt);
// ユーザレコードをオブジェクトに変換
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $users[] = $row;
}

$genders['male'] = "男性";
$genders['female'] = "女性";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>接続成功</h2>
        <h3>SQL</h3>
        <p><?= $stmt->queryString ?></p>

        <div class="mt-3 mb-3">
            <h3>検索</h3>
            <form action="connect_test.php" method="get">
                <input type="text" class="form-control" name="q" value="<?= @$keyword ?>">
                <button class="btn btn-primary">検索</button>
                <a href="connect_test.php" class="btn btn-outline-primary">リセット</a>
            </form>
        </div>

        <h3>ユーザリスト</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <!-- ユーザ繰り返し -->
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $genders[$user['gender']] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>