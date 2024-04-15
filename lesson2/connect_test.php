<?php
// env.php を読み込む
require_once 'env.php';

$db_connection = DB_CONNECTION;
$db_name = DB_USERNAME;
$db_host = DB_HOST;
$db_port = DB_PORT;

$dsn = "{$db_connection}:dbname={$db_name};host={$db_host};port={$db_port};charset=utf8;";