<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "library";

// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
// test connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

/*
// creat database
$sql = "CREATE DATABASE library";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
// creat database successfully
*/

/*
// 使用 sql 创建数据表
$sql = "CREATE TABLE reader (
reader_card INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
reader_name VARCHAR(30) NOT NULL,
reader_password VARCHAR(30) NOT NULL,
reader_email VARCHAR(50),
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
*/
?>
