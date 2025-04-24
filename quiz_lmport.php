<?php
// Параметри підключення до БД
$servername = "localhost";
$username = "root";
$password = "Password_123";
$dbname = "musics";

// Підключення до БД
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Завантаження JSON-файлу для імпорту данних в БД
$json = file_get_contents('quiz.json');
$quiz = json_decode($json, true);

foreach ($quiz as $question) {
    // Додавання питання
    $stmt = $conn->prepare("INSERT INTO questions (type, quiz_name, question) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $question['type'], $question['name'],  $question['question']);
    $stmt->execute();
    $question_id = $stmt->insert_id;

    // Додавання відповідей
    foreach ($question['answers'] as $answer) {
        $stmt = $conn->prepare("INSERT INTO answers (question_id, text, correct) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $question_id, $answer['text'], $answer['correct']);
        $stmt->execute();
    }
}

echo "Дані успішно імпортовані!";
$conn->close();
?>