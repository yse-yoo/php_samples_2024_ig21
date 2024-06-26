<?php
// env.php を読み込む
require_once '../env.php';

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

$sql = "SELECT * FROM users;";

// SQLの実行
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $users[] = $row;
}

$json = json_encode($users);
echo $json;