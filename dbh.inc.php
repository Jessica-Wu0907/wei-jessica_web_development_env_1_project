<?php

$dbServername = "localhost";
$dbUsername = "wei";
$dbPassword = "Liyanmei20230321";
$dbName = "wei28_";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("数据库连接失败：" . mysqli_connect_error());
}else{
    echo "nihao";
}