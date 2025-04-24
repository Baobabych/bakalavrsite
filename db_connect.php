<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musics";

// Сторюємо з'єднання з БД
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевіряємо з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>